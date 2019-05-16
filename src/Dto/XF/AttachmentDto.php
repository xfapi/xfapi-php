<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractItemDto;

/**
 * Class AttachmentDto
 * @package XFApi\Dto\XF
 *
 * @property-read integer $attachment_id
 * @property-read string $content_type
 * @property-read integer $content_id
 * @property-read integer $attach_date
 * @property-read integer $view_count
 *
 * @property-read string $filename
 * @property-read integer $file_size
 * @property-read integer $height
 * @property-read integer $width
 * @property-read string $thumbnail_url
 * @property-read string $video_url
 */
class AttachmentDto extends AbstractItemDto
{

}
