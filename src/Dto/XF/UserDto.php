<?php

namespace XFApi\Dto\XF;

use XFApi\Dto\AbstractItemDto;

/**
 * Class UserDto
 * @package XFApi\Dto\XF
 *
 * @property-read integer $user_id
 * @property-read string $username
 * @property-read integer $message_count
 * @property-read integer $register_date
 * @property-read integer $trophy_points
 * @property-read boolean $is_staff
 * @property-read integer $reaction_score
 *
 * @property-read boolean $is_admin
 * @property-read boolean $is_moderator
 * @property-read boolean $visible
 * @property-read boolean $activity_visible
 * @property-read string $custom_title
 * @property-read boolean $is_super_admin
 * @property-read string $timezone
 * @property-read string $gravatar
 * @property-read boolean $show_dob_year
 * @property-read boolean $show_dob_date
 * @property-read boolean $receive_admin_email
 * @property-read boolean $email_on_conversation
 * @property-read boolean $push_on_conversation
 * @property-read string $creation_watch_state
 * @property-read string $interaction_watch_state
 * @property-read boolean $use_tfa
 * @property-read string $allow_view_profile
 * @property-read string $allow_post_profile
 * @property-read string $allow_send_personal_conversation
 * @property-read string $allow_view_identities
 * @property-read string $allow_receive_news_feed
 * @property-read integer $warning_points
 * @property-read string $user_title
 * @property-read integer $age
 * @property-read array $dob
 * @property-read string $signature
 * @property-read string $Location
 * @property-read string $website
 * @property-read string $about
 * @property-read string $last_activity
 * @property-read array $avatar_urls
 * @property-read array $custom_fields
 * @property-read boolean $is_ignored
 * @property-read boolean $is_followed
 * @property-read string $email
 * @property-read integer $user_group_id
 * @property-read array $secondary_group_ids
 * @property-read string $user_state
 * @property-read boolean $is_banned
 *
 * @property-read boolean $can_edit
 * @property-read boolean $can_ban
 * @property-read boolean $can_warn
 * @property-read boolean $can_view_profile
 * @property-read boolean $can_view_profile_posts
 * @property-read boolean $can_post_profile
 * @property-read boolean $can_follow
 * @property-read boolean $can_ignore
 * @property-read boolean $can_converse
 *
 */
class UserDto extends AbstractItemDto
{

}
