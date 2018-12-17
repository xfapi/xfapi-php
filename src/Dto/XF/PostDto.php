<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractItemDto;

/**
 * Class PostDto
 * @package XFApi\Dto\XF
 *
 * @property-read integer $post_id
 * @property-read integer $thread_id
 * @property-read integer $user_id
 * @property-read string $username
 * @property-read integer $post_date
 * @property-read string $message
 * @property-read string $message_state
 * @property-read integer $attach_count
 * @property-read string $warning_message
 * @property-read integer $position
 * @property-read integer $last_edit_date
 *
 * @property-read array $Attachments
 * @property-read array $Thread
 * @property-read array $User
 *
 * @property-read boolean $is_first_post
 * @property-read boolean $is_last_post
 * @property-read boolean $can_edit
 * @property-read boolean $can_soft_delete
 * @property-read boolean $can_hard_delete
 * @property-read boolean $can_react
 * @property-read boolean $can_view_attachments
 *
 * @property-read boolean $is_reacted_to
 * @property-read integer $visitor_reaction_id
 * @property-read integer $reaction_score
 */
class PostDto extends AbstractItemDto
{

}
