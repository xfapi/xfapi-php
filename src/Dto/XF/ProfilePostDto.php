<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractItemDto;

/**
 * Class ProfilePostDto
 * @package XFApi\Dto\XF
 *
 * @property-read integer $profile_post_id
 * @property-read integer $profile_user_id
 * @property-read integer $user_id
 * @property-read integer $post_date
 * @property-read string $message
 * @property-read string $message_state
 * @property-read string $warning_message
 * @property-read integer $comment_count
 * @property-read integer $first_comment_date
 * @property-read integer $last_comment_date
 *
 * @property-read string $username
 *
 * @property-read array $ProfileUser
 * @property-read array $LatestComments
 *
 * @property-read boolean $can_edit
 * @property-read boolean $can_soft_delete
 * @property-read boolean $can_hard_delete
 * @property-read boolean $can_react
 *
 * @property-read boolean $is_reacted_to
 * @property-read integer $visitor_reaction_id
 * @property-read integer $reaction_score
 *
 */
class ProfilePostDto extends AbstractItemDto
{

}