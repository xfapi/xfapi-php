<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractDto;

/**
 * Class ThreadDto
 * @package XFApi\Dto\XF
 *
 * @property-read integer $thread_id
 * @property-read integer $node_id
 * @property-read string $title
 * @property-read integer $reply_count
 * @property-read integer $view_count
 * @property-read integer $user_id
 * @property-read string $username
 * @property-read integer $post_date
 * @property-read boolean $sticky
 * @property-read string $discussion_state
 * @property-read boolean $discussion_open
 * @property-read string $discussion_type
 * @property-read integer $first_post_id
 * @property-read integer $last_post_date
 * @property-read integer $last_post_id
 * @property-read integer $last_post_user_id
 * @property-read integer $first_post_reaction_score
 * @property-read integer $prefix_id
 * @property-read array $Forum
 * @property-read array $User
 * @property-read array $custom_fields
 * @property-read array $tags
 * @property-read boolean $can_edit
 * @property-read boolean $can_edit_tags
 * @property-read boolean $can_reply
 * @property-read boolean $can_soft_delete
 * @property-read boolean $can_hard_delete
 * @property-read boolean $can_view_attachments
 */
class ThreadDto extends AbstractDto
{

}