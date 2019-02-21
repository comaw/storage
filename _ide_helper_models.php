<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Post
 *
 * @property mixed $comments
 * @property int $id
 * @property int $car_id
 * @property int|null $mileage
 * @property int|null $expenses
 * @property int|null $duration
 * @property string $image
 * @property string|null $caption
 * @property string $language
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $type
 * @property-read \App\Models\Car $car
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $heatup
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post getFollowingPosts($ids)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post getLastPosts()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post getPost()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post search($carIDs, $locations)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereExpenses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereMileage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post withCar()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post withCommentAndUser()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post withLocation()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post withheatUp()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HeatUp[] $heatUpDeleting
 * @property-read \App\Models\ChannelMember $member
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post limitNested($group, $n = 10)
 * @property int $channel_id
 * @property int $company_id
 * @property int $creator_id
 * @property string $content_type
 * @property bool $private
 * @property string|null $video
 * @property float|null $lat
 * @property float|null $lng
 * @property-read \App\Models\Company|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Complaint[] $complaint
 * @property-read mixed $fired
 * @property-read mixed $follow
 * @property-read mixed $user_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereContentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post wherePrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post whereVideo($value)
 */
	class Post extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChannelCarOptions
 *
 * @property int $id
 * @property int $channel_id
 * @property int|null $mark_id
 * @property int|null $model_id
 * @property int|null $submodel_id
 * @property int $original
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereMarkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions whereSubmodelId($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelCarOptions joinCar()
 */
	class ChannelCarOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Admin
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Admin whereUsername($value)
 * @mixin \Eloquent
 */
	class Admin extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Location
 *
 * @property int $id
 * @property int|null $parent_id
 * @property string $name
 * @property string|null $cc_fips
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Location[] $childrens
 * @property-read \App\Models\Location|null $country
 * @property-read \App\Models\Location|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereCcFips($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location withParent()
 * @mixin \Eloquent
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\Location[] $children
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Location whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarList
 *
 * @property int $id
 * @property int $parent_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\CarList[] $children
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\CarList[] $childrens
 * @property-read \App\Models\CarList|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList withParent()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 * @mixin \Eloquent
 */
	class CarList extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserAccessToken
 *
 * @property int $id
 * @property int $user_id
 * @property string $access_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAccessToken whereAccessToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAccessToken whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserAccessToken whereUserId($value)
 * @mixin \Eloquent
 */
	class UserAccessToken extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Complaint
 *
 * @property int $id
 * @property string $type
 * @property int $user_id
 * @property int $target_id
 * @property int $reason_id
 * @property string|null $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Models\ComplaintList $reason
 * @property-read \App\Models\Car $target
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereReasonId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Complaint whereUserId($value)
 * @mixin \Eloquent
 */
	class Complaint extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Channel
 *
 * @property int $id
 * @property string $logo
 * @property string $title_name
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $antispam
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChannelCarOptions[] $carFilters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChannelLocationOptions[] $locationFilters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChannelMember[] $members
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChannelMember[] $requests
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel getMyChannels($carIDs)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel searchChannel($cars, $locations, $name)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereAntispam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereTitleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel withMembers()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $requestsCars
 * @property int $company
 * @property int $verified
 * @property int $verified_special
 * @property int $creator_id
 * @property string $allow_companies
 * @property-read \App\Models\ChannelMember $admin
 * @property-read \App\Models\User $creator
 * @property-read mixed $last_post_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $requestsCompanies
 * @property-write mixed $anti_spam
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel getWhereAdminChannels($userId)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereAllowCompanies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereCreatorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel whereVerifiedSpecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Channel withCompaniesMembers()
 */
	class Channel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property int $id
 * @property int $post_id
 * @property int $parent_id
 * @property int $user_id
 * @property string $body
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $childrens
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $heatUp
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment getComments()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment withUser()
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HeatUp[] $heatUpDeleting
 * @property string $type
 * @property-read \App\Models\Post $post
 * @property-read \App\Models\CompanyReview $review
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Comment whereType($value)
 */
	class Comment extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChannelMember
 *
 * @property int $id
 * @property int $channel_id
 * @property int $car_id
 * @property bool $is_admin
 * @property bool $confirmed
 * @property string $type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Models\Car $car
 * @property string|null $level
 * @property int|null $stars
 * @property string|null $rank
 * @property string|null $last_enter
 * @property-read \App\Models\Company $company
 * @property-read mixed $channel_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereLastEnter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereStars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelMember whereType($value)
 */
	class ChannelMember extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\HeatUp
 *
 * @property int $id
 * @property int $target_id
 * @property int $user_id
 * @property bool $status
 * @property string|null $type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereTargetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\HeatUp whereUserId($value)
 * @mixin \Eloquent
 */
	class HeatUp extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $email
 * @property string $password
 * @property string|null $avatar
 * @property string $username
 * @property string|null $device_token
 * @property string|null $reset_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $social_id
 * @property string|null $bio
 * @property string|null $currency
 * @property string|null $millege
 * @property string|null $phone
 * @property int $location_id
 * @property boolean $verified
 * @property boolean $verified_special
 * @property boolean $police
 * @property string $language
 * @property string|null $instagram
 * @property string|null $telegram
 * @property string|null $youtube
 * @property string|null $website
 * @property boolean $private
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Car[] $car
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Follow[] $followers
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Follow[] $following
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HeatUp[] $heatUpPost
 * @property-read \App\Models\Location|null $location
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User getGarage()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User getHome()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User getUserProfile()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereDeviceToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereMillege($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereResetToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSocialId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsername($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Follow[] $followingDelete
 * @property string|null $push_token
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserAccessToken[] $accessToken
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Channel[] $channels
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Complaint[] $complaintFromUser
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Follow[] $confirmation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Follow[] $followersDelete
 * @property-read mixed $follow
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HeatUp[] $heatUpPostDeleting
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\UserPush[] $pushToken
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePolice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePrivate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePushToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereVerifiedSpecial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereYoutube($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ComplaintList
 *
 * @property int $id
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComplaintList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComplaintList whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComplaintList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ComplaintList whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	class ComplaintList extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompanyLocationOptions
 *
 * @property int $id
 * @property int $company_id
 * @property int|null $country_id
 * @property int|null $city_id
 * @property int $original
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereUpdatedAt($value)
 * @mixin \Baum\Extensions\Eloquent\
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions joinLocation()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyLocationOptions whereCompanyId($value)
 */
	class CompanyLocationOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompanyServiceOptions
 *
 * @property int $id
 * @property int $company_id
 * @property int|null $parent_id
 * @property int|null $child_id
 * @property int $original
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereUpdatedAt($value)
 * @mixin \Baum\Extensions\Eloquent\
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions joinLocation()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions joinService()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereChildId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyServiceOptions whereParentId($value)
 */
	class CompanyServiceOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property int $parent_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\CarList[] $children
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\CarList[] $childrens
 * @property-read \App\Models\CarList|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarList withParent()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 * @mixin \Baum\Extensions\Eloquent\
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyReview[] $companyReview
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ChannelLocationOptions
 *
 * @property int $id
 * @property int $channel_id
 * @property int|null $country_id
 * @property int|null $city_id
 * @property int $original
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereChannelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions whereUpdatedAt($value)
 * @mixin \Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\ChannelLocationOptions joinLocation()
 */
	class ChannelLocationOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\UserPush
 *
 * @property int $id
 * @property int $user_id
 * @property string $push_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserPush whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserPush whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserPush wherePushToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserPush whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\UserPush whereUserId($value)
 * @mixin \Eloquent
 */
	class UserPush extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompanyReview
 *
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property int $stars
 * @property string $text
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Comment[] $comments
 * @property-read \App\Models\Company $company
 * @property-read mixed $rank
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HeatUp[] $heatUpDeleting
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $heatup
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereStars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyReview whereUserId($value)
 * @mixin \Eloquent
 */
	class CompanyReview extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Log
 *
 * @property int $id
 * @property int $user_id
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Admin $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Log whereUserId($value)
 * @mixin \Eloquent
 */
	class Log extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarGroups
 *
 * @property int $id
 * @property string $name
 * @property-read \App\Models\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGroups whereCarGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGroups whereCarGroupName($value)
 * @package App\Models
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGroups whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGroups whereName($value)
 * @mixin \Eloquent
 */
	class CarGroups extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string|null $avatar
 * @property string $name
 * @property int|null $stars
 * @property string|null $rank
 * @property int $admin_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $work_time_from
 * @property string|null $work_time_to
 * @property string|null $phone
 * @property string|null $address
 * @property string|null $website
 * @property string|null $instagram
 * @property string|null $youtube
 * @property string|null $telegram
 * @property string|null $description
 * @property float $lat
 * @property float $lng
 * @property int $location_id
 * @property-read \App\Models\CompanyMember $admin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyCarOptions[] $carFilters
 * @property-read mixed $full_description
 * @property-read mixed $membership
 * @property-read mixed $review_count
 * @property-read \App\Models\Location $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyLocationOptions[] $locationFilters
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyMember[] $members
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $post
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyReview[] $reviews
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\CompanyServiceOptions[] $serviceFilters
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company searchCompany($cars, $locations, $services, $name)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereRank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereStars($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereWebsite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereWorkTimeFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereWorkTimeTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereYoutube($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company withAdmin()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company withCarFilters()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company withCompanyData()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company withLocation()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company withLocationFilters()
 * @mixin \Eloquent
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MotorcyclesList
 *
 * @property int $id
 * @property int $parent_id
 * @property int|null $lft
 * @property int|null $rgt
 * @property int|null $depth
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\MotorcycleList[] $children
 * @property-read \Baum\Extensions\Eloquent\Collection|\App\Models\MotorcycleList[] $childrens
 * @property-read \App\Models\MotorcycleList|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node limitDepth($limit)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereDepth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\MotorcycleList withParent()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutNode($node)
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutRoot()
 * @method static \Illuminate\Database\Eloquent\Builder|\Baum\Node withoutSelf()
 * @mixin \Baum\Extensions\Eloquent\
 */
	class MotorcycleList extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompanyMember
 *
 * @property int $id
 * @property int $company_id
 * @property int $user_id
 * @property bool $is_admin
 * @property string $role
 * @property bool $confirmed
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Company $company
 * @property-read mixed $avatar
 * @property-read mixed $name
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyMember whereUserId($value)
 * @mixin \Eloquent
 */
	class CompanyMember extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CompanyCarOptions
 *
 * @property int $id
 * @property int $company_id
 * @property int|null $mark_id
 * @property int|null $model_id
 * @property int|null $submodel_id
 * @property int $original
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereMarkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereOriginal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereSubmodelId($value)
 * @mixin \Baum\Extensions\Eloquent\
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions joinCar()
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CompanyCarOptions whereUpdatedAt($value)
 */
	class CompanyCarOptions extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CarGallery
 *
 * @property int $id
 * @property int $car_id
 * @property string $image
 * @property bool $selected
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Models\Car $car
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGallery whereCarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGallery whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGallery whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGallery whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGallery whereSelected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CarGallery whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read mixed $group_id
 */
	class CarGallery extends \Eloquent {}
}

