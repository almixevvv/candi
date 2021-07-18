<?php

namespace App\Enums\Subscription;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class SubscriptionStatus extends Enum
{
    const Subscribed = 1;
    const NotSubscribed = 2;
}
