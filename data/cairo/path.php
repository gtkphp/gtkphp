<?php
/**
 * Cairo graphics library
 * @package cairo
 */

/**
 * Creating paths and manipulating path data
 */
class cairo_path_t {
    /**
     * 
     * @var cairo_status_t
     */
    public $status;
    /**
     * 
     * @var cairo_path_data_t
     */
    public $data;
    /**
     * 
     * @var int
     */
    public $num_data;
}

/**
 * Creates a copy of the current path and returns it to the user as a ca...
 * @param cairo_t $cr a cairo context
 * @return cairo_path_t
 */
function cairo_copy_path(cairo_t $cr):cairo_path_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_path_t();}

/**
 * Gets a flattened copy of the current path and returns it to the user ...
 * @param cairo_t $cr a cairo context
 * @return cairo_path_t
 */
function cairo_copy_path_flat(cairo_t $cr):cairo_path_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_path_t();}

/**
 * Immediately releases all memory associated with path .
 * @param cairo_path_t $path a path previously returned by either cairo_copy_path() or cairo_copy_...
 */
function cairo_path_destroy(cairo_path_t $path)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Append the path onto the current path.
 * @param cairo_t $cr a cairo context
 * @param cairo_path_t $path path to be appended
 */
function cairo_append_path(cairo_t $cr, cairo_path_t $path)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Returns whether a current point is defined on the current path.
 * @param cairo_t $cr a cairo context
 * @return cairo_bool_t
 */
function cairo_has_current_point(cairo_t $cr):cairo_bool_t 
{die('Error: Forbidden include_path "' . __DIR__ . '"'); return new cairo_bool_t();}

/**
 * Gets the current point of the current path, which is conceptually the...
 * @param cairo_t $cr a cairo context
 * @param float $x return value for X coordinate of the current point
 * @param float $y return value for Y coordinate of the current point
 */
function cairo_get_current_point(cairo_t $cr, float $x, float $y)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Clears the current path.
 * @param cairo_t $cr a cairo context
 */
function cairo_new_path(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Begin a new sub-path.
 * @param cairo_t $cr a cairo context
 */
function cairo_new_sub_path(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds a line segment to the path from the current point to the beginni...
 * @param cairo_t $cr a cairo context
 */
function cairo_close_path(cairo_t $cr)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds a circular arc of the given radius to the current path.
 * @param cairo_t $cr a cairo context
 * @param float $xc X position of the center of the arc
 * @param float $yc Y position of the center of the arc
 * @param float $radius the radius of the arc
 * @param float $angle1 the start angle, in radians
 * @param float $angle2 the end angle, in radians
 */
function cairo_arc(cairo_t $cr, float $xc, float $yc, float $radius, float $angle1, float $angle2)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds a circular arc of the given radius to the current path.
 * @param cairo_t $cr a cairo context
 * @param float $xc X position of the center of the arc
 * @param float $yc Y position of the center of the arc
 * @param float $radius the radius of the arc
 * @param float $angle1 the start angle, in radians
 * @param float $angle2 the end angle, in radians
 */
function cairo_arc_negative(cairo_t $cr, float $xc, float $yc, float $radius, float $angle1, float $angle2)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds a cubic Bézier spline to the path from the current point to pos...
 * @param cairo_t $cr a cairo context
 * @param float $x1 the X coordinate of the first control point
 * @param float $y1 the Y coordinate of the first control point
 * @param float $x2 the X coordinate of the second control point
 * @param float $y2 the Y coordinate of the second control point
 * @param float $x3 the X coordinate of the end of the curve
 * @param float $y3 the Y coordinate of the end of the curve
 */
function cairo_curve_to(cairo_t $cr, float $x1, float $y1, float $x2, float $y2, float $x3, float $y3)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds a line to the path from the current point to position (x , y ) i...
 * @param cairo_t $cr a cairo context
 * @param float $x the X coordinate of the end of the new line
 * @param float $y the Y coordinate of the end of the new line
 */
function cairo_line_to(cairo_t $cr, float $x, float $y)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Begin a new sub-path.
 * @param cairo_t $cr a cairo context
 * @param float $x the X coordinate of the new position
 * @param float $y the Y coordinate of the new position
 */
function cairo_move_to(cairo_t $cr, float $x, float $y)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds a closed sub-path rectangle of the given size to the current pat...
 * @param cairo_t $cr a cairo context
 * @param float $x the X coordinate of the top left corner of the rectangle
 * @param float $y the Y coordinate to the top left corner of the rectangle
 * @param float $width the width of the rectangle
 * @param float $height the height of the rectangle
 */
function cairo_rectangle(cairo_t $cr, float $x, float $y, float $width, float $height)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds closed paths for the glyphs to the current path.
 * @param cairo_t $cr a cairo context
 * @param cairo_glyph_t $glyphs array of glyphs to show
 * @param int $num_glyphs number of glyphs to show
 */
function cairo_glyph_path(cairo_t $cr, cairo_glyph_t $glyphs, int $num_glyphs)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Adds closed paths for text to the current path.
 * @param cairo_t $cr a cairo context
 * @param string $utf8 a NUL-terminated string of text encoded in UTF-8, or NULL
 */
function cairo_text_path(cairo_t $cr, string $utf8)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Relative-coordinate version of cairo_curve_to().
 * @param cairo_t $cr a cairo context
 * @param float $dx1 the X offset to the first control point
 * @param float $dy1 the Y offset to the first control point
 * @param float $dx2 the X offset to the second control point
 * @param float $dy2 the Y offset to the second control point
 * @param float $dx3 the X offset to the end of the curve
 * @param float $dy3 the Y offset to the end of the curve
 */
function cairo_rel_curve_to(cairo_t $cr, float $dx1, float $dy1, float $dx2, float $dy2, float $dx3, float $dy3)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Relative-coordinate version of cairo_line_to().
 * @param cairo_t $cr a cairo context
 * @param float $dx the X offset to the end of the new line
 * @param float $dy the Y offset to the end of the new line
 */
function cairo_rel_line_to(cairo_t $cr, float $dx, float $dy)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Begin a new sub-path.
 * @param cairo_t $cr a cairo context
 * @param float $dx the X offset
 * @param float $dy the Y offset
 */
function cairo_rel_move_to(cairo_t $cr, float $dx, float $dy)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

/**
 * Computes a bounding box in user-space coordinates covering the points...
 * @param cairo_t $cr a cairo context
 * @param float $x1 left of the resulting extents
 * @param float $y1 top of the resulting extents
 * @param float $x2 right of the resulting extents
 * @param float $y2 bottom of the resulting extents
 */
function cairo_path_extents(cairo_t $cr, float $x1, float $y1, float $x2, float $y2)
{die('Error: Forbidden include_path "' . __DIR__ . '"');}

