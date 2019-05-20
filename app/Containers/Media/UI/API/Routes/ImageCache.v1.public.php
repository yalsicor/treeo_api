<?php

/**
 * @apiGroup           Media
 * @apiName            null
 *
 * @api                {GET} /media/:template/:filename (P) - Imagecache
 * @apiDescription     Url based image manipulation with image caching.
 *
 * options for :template:
 * - small_square (75x75)
 * - large_square (150x150)
 * - thumbnail (100)*
 * - small (240)*
 * - small320 (320)*
 * - medium (500)*
 * - medium640 (640)*
 * - medium800 (800)*
 * - large (1024)*
 * - large1600 (1600)*
 * - large2048 (2048)*
 * - avatar (150x150)
 * - original - original image file
 * - download - forces the browser to download the file
 * *keeps original image proportions, size of longest side
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiSuccessExample  Success-Response:
 * HTTP/1.1 200 OK
Body: the actual image file

 */
