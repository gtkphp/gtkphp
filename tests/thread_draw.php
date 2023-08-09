<?php

/*!
 * \brief A simple animation using cairo and GTK+ 
 *
 * This program shows high /usr/libexec/Xorg load while running full screen on Linux
 *
 * Compile with:
 *   gcc `pkg-config --cflags --libs gtk+-3.0` -lm -lpthread main.c
 *
 * or run: make -B all
 * CFLAGS = -Wall -g `pkg-config --cflags gtk+-3.0` -lm -lpthread
 * LDFLAGS = `pkg-config --libs gtk+-3.0`
 * 
 * all: main.c
 * 	$(CC) -o main main.c $(CFLAGS) $(LDFLAGS)
 */


#include <gtk/gtk.h>
#include <math.h>
#include <pthread.h>


#define NUM_POINTS (1000u)
#define PERIOD (100u)


/* Local variables. */
static pthread_t drawing_thread;
static pthread_mutex_t mutex;
static cairo_surface_t *surface = NULL;
static int surface_width;
static int surface_height;


/* Local function prototypes. */
static gboolean invalidate_cb (void *);
static gboolean drawing_area_configure_cb (GtkWidget *, GdkEventConfigure *);
static void drawing_area_draw_cb (GtkWidget *, cairo_t *, void *);
static void * thread_draw (void *);


int
main (int argc, char **argv)
{
  gtk_init (&argc, &argv);

  GtkWidget *main_window = gtk_window_new (GTK_WINDOW_TOPLEVEL);
  gtk_window_set_title (GTK_WINDOW (main_window), "Drawing example");
  gtk_window_set_default_size (GTK_WINDOW (main_window), 400, 400);
  GtkWidget *drawing_area = gtk_drawing_area_new ();

  /* Connect to the configure event to create the surface. */
  g_signal_connect (drawing_area, "configure-event", G_CALLBACK (drawing_area_configure_cb), NULL);

  gtk_container_add (GTK_CONTAINER (main_window), drawing_area);
  gtk_widget_show_all (main_window);

  /* Create a new thread to update the stored surface. */
  pthread_mutex_init (&mutex, NULL);
  pthread_create (&drawing_thread, NULL, thread_draw, NULL);

  /* Create a  timer to invalidate our window at 60Hz, and display the stored surface. */
  g_timeout_add (1000 / 60, invalidate_cb, drawing_area);

  /* Connect our redraw callback. */
  g_signal_connect (drawing_area, "draw", G_CALLBACK (drawing_area_draw_cb), NULL);

  /* Connect the destroy signal. */
  g_signal_connect (main_window, "destroy", G_CALLBACK (gtk_main_quit), NULL);

  gtk_main ();
}


static gboolean
invalidate_cb (void *ptr)
{
  if (GTK_IS_WIDGET (ptr))
  {
    gtk_widget_queue_draw (GTK_WIDGET (ptr));
    return TRUE;
    }

  return FALSE;
}


static gboolean
drawing_area_configure_cb (GtkWidget *widget, GdkEventConfigure *event)
{
  if (event -> type == GDK_CONFIGURE)
  {
    pthread_mutex_lock (&mutex);

    if (surface != (cairo_surface_t *)NULL)
    {
      cairo_surface_destroy (surface);
    }

    GtkAllocation allocation;
    gtk_widget_get_allocation (widget, &allocation);
    surface = cairo_image_surface_create (CAIRO_FORMAT_ARGB32, allocation.width, allocation.height);
    surface_width = allocation.width;
    surface_height = allocation.height;	

    pthread_mutex_unlock (&mutex);
  }

  return TRUE;
}


static inline float
sine_to_point (int x, int width, int height)
{
  return (height / 2.0) * sin (x * 2 * M_PI / (PERIOD)) + height / 2.0;
}


static void
drawing_area_draw_cb (GtkWidget *widget, cairo_t *context, void *ptr)
{
  /* Copy the contents of the surface to the current context. */
  pthread_mutex_lock (&mutex);

  if (surface != (cairo_surface_t *)NULL)
  {
    cairo_set_source_surface (context, surface, 0, 0);
    cairo_paint (context);
  }

  pthread_mutex_unlock (&mutex);
}


static void *
thread_draw (void *ptr)
{
  int i;
  int redraw_number = 0;

  while ( 1 )
  {
    usleep (1E6 / 60); /* Sleep for 60 Hz. */

    if (surface == (cairo_surface_t *)NULL)
    {
      continue;
    }

    pthread_mutex_lock (&mutex);

    cairo_t *context = cairo_create (surface);

    /* Draw the background. */
    cairo_set_source_rgb (context, 1, 1, 1);
    cairo_rectangle (context, 0, 0, surface_width, surface_height);
    cairo_fill (context);

    /* Draw a moving sine wave. */
    cairo_set_source_rgb (context, 0.5, 0.5, 0);
    cairo_move_to(context, 0, sine_to_point (0 + redraw_number, surface_width, surface_height));

    for (i = 1; i < NUM_POINTS; i++)
    {
      cairo_line_to (context,  i, sine_to_point (i + redraw_number, surface_width, surface_height));
    }

    cairo_stroke (context);

    redraw_number++;
    cairo_destroy (context);

    pthread_mutex_unlock (&mutex);
  }

  return NULL;
}
