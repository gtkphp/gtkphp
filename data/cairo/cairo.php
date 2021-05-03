<?php
/**
 * Cairo graphics library
 * @package cairo
 */

use cairo_surface_t;
use cairo_antialias_t;
use cairo_pattern_t;

/**
 * The cairo drawing context
 */
class cairo_t {
}

const CAIRO_ANTIALIAS_DEFAULT = 0;
const CAIRO_ANTIALIAS_NONE = 1;
const CAIRO_ANTIALIAS_GRAY = 2;
const CAIRO_ANTIALIAS_SUBPIXEL = 3;
const CAIRO_ANTIALIAS_FAST = 4;
const CAIRO_ANTIALIAS_GOOD = 5;
const CAIRO_ANTIALIAS_BEST = 6;


/**
 * Creates a new cairo_t with all graphics state parameters set to defau...
 * @param cairo_surface_t $target target surface for the context
 * @return cairo_t
 */
function cairo_create(cairo_surface_t $target):cairo_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_t();}

/**
 * Increases the reference count on cr by one.
 * @param cairo_t $cr a cairo_t
 * @return cairo_t
 */
function cairo_reference(cairo_t $cr):cairo_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_t();}

/**
 * Decreases the reference count on cr by one.
 * @param cairo_t $cr a cairo_t
 */
function cairo_destroy(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Checks whether an error has previously occurred for this context.
 * @param cairo_t $cr a cairo context
 * @return int
 */
function cairo_status(cairo_t $cr):int 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0;}

/**
 * Makes a copy of the current state of cr and saves it on an internal s...
 * @param cairo_t $cr a cairo_t
 */
function cairo_save(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Restores cr to the state saved by a preceding call to cairo_save() an...
 * @param cairo_t $cr a cairo_t
 */
function cairo_restore(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the target surface for the cairo context as passed to cairo_crea...
 * @param cairo_t $cr a cairo context
 * @return cairo_surface_t
 */
function cairo_get_target(cairo_t $cr):cairo_surface_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_surface_t();}

/**
 * Temporarily redirects drawing to an intermediate surface known as a g...
 * @param cairo_t $cr a cairo context
 */
function cairo_push_group(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Temporarily redirects drawing to an intermediate surface known as a g...
 * @param cairo_t $cr a cairo context
 * @param cairo_content_t $content a cairo_content_t indicating the type of group that will be created
 */
function cairo_push_group_with_content(cairo_t $cr, cairo_content_t $content)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Terminates the redirection begun by a call to cairo_push_group() or c...
 * @param cairo_t $cr a cairo context
 * @return cairo_pattern_t
 */
function cairo_pop_group(cairo_t $cr):cairo_pattern_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_pattern_t();}

/**
 * Terminates the redirection begun by a call to cairo_push_group() or c...
 * @param cairo_t $cr a cairo context
 */
function cairo_pop_group_to_source(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current destination surface for the context.
 * @param cairo_t $cr a cairo context
 * @return cairo_surface_t
 */
function cairo_get_group_target(cairo_t $cr):cairo_surface_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_surface_t();}

/**
 * Sets the source pattern within cr to an opaque color.
 * @param cairo_t $cr a cairo context
 * @param float $red red component of color
 * @param float $green green component of color
 * @param float $blue blue component of color
 */
function cairo_set_source_rgb(cairo_t $cr, float $red, float $green, float $blue)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Sets the source pattern within cr to a translucent color.
 * @param cairo_t $cr a cairo context
 * @param float $red red component of color
 * @param float $green green component of color
 * @param float $blue blue component of color
 * @param float $alpha alpha component of color
 */
function cairo_set_source_rgba(cairo_t $cr, float $red, float $green, float $blue, float $alpha)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Sets the source pattern within cr to source .
 * @param cairo_t $cr a cairo context
 * @param cairo_pattern_t $source a cairo_pattern_t to be used as the source for subsequent drawing ope...
 */
function cairo_set_source(cairo_t $cr, cairo_pattern_t $source)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * This is a convenience function for creating a pattern from surface an...
 * @param cairo_t $cr a cairo context
 * @param cairo_surface_t $surface a surface to be used to set the source pattern
 * @param float $x User-space X coordinate for surface origin
 * @param float $y User-space Y coordinate for surface origin
 */
function cairo_set_source_surface(cairo_t $cr, cairo_surface_t $surface, float $x, float $y)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current source pattern for cr .Since: 1.0
 * @param cairo_t $cr a cairo context
 * @return cairo_pattern_t
 */
function cairo_get_source(cairo_t $cr):cairo_pattern_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_pattern_t();}

/**
 * Set the antialiasing mode of the rasterizer used for drawing shapes.
 * @param cairo_t $cr a cairo_t
 * @param cairo_antialias_t $antialias the new antialiasing mode
 */
function cairo_set_antialias(cairo_t $cr, cairo_antialias_t $antialias)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current shape antialiasing mode, as set by cairo_set_antiali...
 * @param cairo_t $cr a cairo context
 * @return cairo_antialias_t
 */
function cairo_get_antialias(cairo_t $cr):cairo_antialias_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_antialias_t();}

/**
 * Sets the dash pattern to be used by cairo_stroke().
 * @param cairo_t $cr a cairo context
 * @param float $dashes an array specifying alternate lengths of on and off stroke portions
 * @param int $num_dashes the length of the dashes array
 * @param float $offset an offset into the dash pattern at which the stroke should start
 */
function cairo_set_dash(cairo_t $cr, float $dashes, int $num_dashes, float $offset)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * This function returns the length of the dash array in cr (0 if dashin...
 * @param cairo_t $cr a cairo_t
 * @return int
 */
function cairo_get_dash_count(cairo_t $cr):int 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0;}

/**
 * Gets the current dash array.
 * @param cairo_t $cr a cairo_t
 * @param float $dashes return value for the dash array, or NULL
 * @param float $offset return value for the current dash offset, or NULL
 */
function cairo_get_dash(cairo_t $cr, float $dashes, float $offset)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Set the current fill rule within the cairo context.
 * @param cairo_t $cr a cairo_t
 * @param cairo_fill_rule_t $fill_rule a fill rule, specified as a cairo_fill_rule_t
 */
function cairo_set_fill_rule(cairo_t $cr, cairo_fill_rule_t $fill_rule)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current fill rule, as set by cairo_set_fill_rule().Since: 1.0
 * @param cairo_t $cr a cairo context
 * @return cairo_fill_rule_t
 */
function cairo_get_fill_rule(cairo_t $cr):cairo_fill_rule_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_fill_rule_t();}

/**
 * Sets the current line cap style within the cairo context.
 * @param cairo_t $cr a cairo context
 * @param cairo_line_cap_t $line_cap a line cap style
 */
function cairo_set_line_cap(cairo_t $cr, cairo_line_cap_t $line_cap)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current line cap style, as set by cairo_set_line_cap().Since: 1.0
 * @param cairo_t $cr a cairo context
 * @return cairo_line_cap_t
 */
function cairo_get_line_cap(cairo_t $cr):cairo_line_cap_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_line_cap_t();}

/**
 * Sets the current line join style within the cairo context.
 * @param cairo_t $cr a cairo context
 * @param cairo_line_join_t $line_join a line join style
 */
function cairo_set_line_join(cairo_t $cr, cairo_line_join_t $line_join)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current line join style, as set by cairo_set_line_join().
 * @param cairo_t $cr a cairo context
 * @return cairo_line_join_t
 */
function cairo_get_line_join(cairo_t $cr):cairo_line_join_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_line_join_t();}

/**
 * Sets the current line width within the cairo context.
 * @param cairo_t $cr a cairo_t
 * @param float $width a line width
 */
function cairo_set_line_width(cairo_t $cr, float $width)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * This function returns the current line width value exactly as set by ...
 * @param cairo_t $cr a cairo context
 * @return float
 */
function cairo_get_line_width(cairo_t $cr):float 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0.0;}

/**
 * Sets the current miter limit within the cairo context.
 * @param cairo_t $cr a cairo context
 * @param float $limit miter limit to set
 */
function cairo_set_miter_limit(cairo_t $cr, float $limit)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current miter limit, as set by cairo_set_miter_limit().Since: 1.0
 * @param cairo_t $cr a cairo context
 * @return float
 */
function cairo_get_miter_limit(cairo_t $cr):float 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0.0;}

/**
 * Sets the compositing operator to be used for all drawing operations.
 * @param cairo_t $cr a cairo_t
 * @param cairo_operator_t $op a compositing operator, specified as a cairo_operator_t
 */
function cairo_set_operator(cairo_t $cr, cairo_operator_t $op)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current compositing operator for a cairo context.Since: 1.0
 * @param cairo_t $cr a cairo context
 * @return cairo_operator_t
 */
function cairo_get_operator(cairo_t $cr):cairo_operator_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_operator_t();}

/**
 * Sets the tolerance used when converting paths into trapezoids.
 * @param cairo_t $cr a cairo_t
 * @param float $tolerance the tolerance, in device units (typically pixels)
 */
function cairo_set_tolerance(cairo_t $cr, float $tolerance)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current tolerance value, as set by cairo_set_tolerance().
 * @param cairo_t $cr a cairo context
 * @return float
 */
function cairo_get_tolerance(cairo_t $cr):float 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0.0;}

/**
 * Establishes a new clip region by intersecting the current clip region...
 * @param cairo_t $cr a cairo context
 */
function cairo_clip(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Establishes a new clip region by intersecting the current clip region...
 * @param cairo_t $cr a cairo context
 */
function cairo_clip_preserve(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Computes a bounding box in user coordinates covering the area inside ...
 * @param cairo_t $cr a cairo context
 * @param float $x1 left of the resulting extents
 * @param float $y1 top of the resulting extents
 * @param float $x2 right of the resulting extents
 * @param float $y2 bottom of the resulting extents
 */
function cairo_clip_extents(cairo_t $cr, float $x1, float $y1, float $x2, float $y2)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Tests whether the given point is inside the area that would be visibl...
 * @param cairo_t $cr a cairo context
 * @param float $x X coordinate of the point to test
 * @param float $y Y coordinate of the point to test
 * @return cairo_bool_t
 */
function cairo_in_clip(cairo_t $cr, float $x, float $y):cairo_bool_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_bool_t();}

/**
 * Reset the current clip region to its original, unrestricted state.
 * @param cairo_t $cr a cairo context
 */
function cairo_reset_clip(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Unconditionally frees rectangle_list and all associated references.
 * @param cairo_rectangle_list_t $rectangle_list a rectangle list, as obtained from cairo_copy_clip_rectangle_list()
 */
function cairo_rectangle_list_destroy(cairo_rectangle_list_t $rectangle_list)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Gets the current clip region as a list of rectangles in user coordina...
 * @param cairo_t $cr a cairo context
 * @return cairo_rectangle_list_t
 */
function cairo_copy_clip_rectangle_list(cairo_t $cr):cairo_rectangle_list_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_rectangle_list_t();}

/**
 * A drawing operator that fills the current path according to the curre...
 * @param cairo_t $cr a cairo context
 */
function cairo_fill(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * A drawing operator that fills the current path according to the curre...
 * @param cairo_t $cr a cairo context
 */
function cairo_fill_preserve(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Computes a bounding box in user coordinates covering the area that wo...
 * @param cairo_t $cr a cairo context
 * @param float $x1 left of the resulting extents
 * @param float $y1 top of the resulting extents
 * @param float $x2 right of the resulting extents
 * @param float $y2 bottom of the resulting extents
 */
function cairo_fill_extents(cairo_t $cr, float $x1, float $y1, float $x2, float $y2)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Tests whether the given point is inside the area that would be affect...
 * @param cairo_t $cr a cairo context
 * @param float $x X coordinate of the point to test
 * @param float $y Y coordinate of the point to test
 * @return cairo_bool_t
 */
function cairo_in_fill(cairo_t $cr, float $x, float $y):cairo_bool_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_bool_t();}

/**
 * A drawing operator that paints the current source using the alpha cha...
 * @param cairo_t $cr a cairo context
 * @param cairo_pattern_t $pattern a cairo_pattern_t
 */
function cairo_mask(cairo_t $cr, cairo_pattern_t $pattern)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * A drawing operator that paints the current source using the alpha cha...
 * @param cairo_t $cr a cairo context
 * @param cairo_surface_t $surface a cairo_surface_t
 * @param float $surface_x X coordinate at which to place the origin of surface 
 * @param float $surface_y Y coordinate at which to place the origin of surface 
 */
function cairo_mask_surface(cairo_t $cr, cairo_surface_t $surface, float $surface_x, float $surface_y)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * A drawing operator that paints the current source everywhere within t...
 * @param cairo_t $cr a cairo context
 */
function cairo_paint(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * A drawing operator that paints the current source everywhere within t...
 * @param cairo_t $cr a cairo context
 * @param float $alpha alpha value, between 0 (transparent) and 1 (opaque)
 */
function cairo_paint_with_alpha(cairo_t $cr, float $alpha)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * A drawing operator that strokes the current path according to the cur...
 * @param cairo_t $cr a cairo context
 */
function cairo_stroke(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * A drawing operator that strokes the current path according to the cur...
 * @param cairo_t $cr a cairo context
 */
function cairo_stroke_preserve(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Computes a bounding box in user coordinates covering the area that wo...
 * @param cairo_t $cr a cairo context
 * @param float $x1 left of the resulting extents
 * @param float $y1 top of the resulting extents
 * @param float $x2 right of the resulting extents
 * @param float $y2 bottom of the resulting extents
 */
function cairo_stroke_extents(cairo_t $cr, float $x1, float $y1, float $x2, float $y2)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Tests whether the given point is inside the area that would be affect...
 * @param cairo_t $cr a cairo context
 * @param float $x X coordinate of the point to test
 * @param float $y Y coordinate of the point to test
 * @return cairo_bool_t
 */
function cairo_in_stroke(cairo_t $cr, float $x, float $y):cairo_bool_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_bool_t();}

/**
 * Emits the current page for backends that support multiple pages, but ...
 * @param cairo_t $cr a cairo context
 */
function cairo_copy_page(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Emits and clears the current page for backends that support multiple ...
 * @param cairo_t $cr a cairo context
 */
function cairo_show_page(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Returns the current reference count of cr .Since: 1.4
 * @param cairo_t $cr a cairo_t
 * @return int
 */
function cairo_get_reference_count(cairo_t $cr):int 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0;}

/**
 * Attach user data to cr .
 * @param cairo_t $cr a cairo_t
 * @param cairo_user_data_key_t $key the address of a cairo_user_data_key_t to attach the user data to
 * @param void $user_data the user data to attach to the cairo_t
 * @param callback(void): void $destroy a cairo_destroy_func_t which will be called when the cairo_t is destr...
 * @return int
 */
function cairo_set_user_data(cairo_t $cr, cairo_user_data_key_t $key, void $user_data, callback $destroy):int 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return 0;}

/**
 * Return user data previously attached to cr using the specified key.
 * @param cairo_t $cr a cairo_t
 * @param cairo_user_data_key_t $key the address of the cairo_user_data_key_t the user data was attached to
 */
function cairo_get_user_data(cairo_t $cr, cairo_user_data_key_t $key)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

