<?php

namespace App\Providers;

use App\Events\ArticleWasSubmittedForApproval;
use App\Events\CommentWasAdded;
use App\Events\ReplyWasCreated;
use App\Events\ThreadWasCreated;
use App\Listeners\NotifyMentionedUsers;
use App\Listeners\PostNewThreadNotification;
use App\Listeners\SendNewArticleNotification;
use App\Listeners\SendNewCommentNotification;
use App\Listeners\SendNewReplyNotification;
use App\Listeners\SendNewThreadNotification;
use App\Listeners\SendWelcomeMailNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendWelcomeMailNotification::class,
        ],
        ReplyWasCreated::class => [
            SendNewReplyNotification::class,
            NotifyMentionedUsers::class,
        ],
        ThreadWasCreated::class => [
            SendNewThreadNotification::class,
            PostNewThreadNotification::class,
        ],
        ArticleWasSubmittedForApproval::class => [
            SendNewArticleNotification::class,
        ],
        CommentWasAdded::class => [
            SendNewCommentNotification::class,
        ],
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            \SocialiteProviders\Twitter\TwitterExtendSocialite::class.'@handle',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
