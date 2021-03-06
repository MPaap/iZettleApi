<?php

declare(strict_types=1);

namespace LauLamanApps\IzettleApi\Client\Purchase\Exception;

use Exception;
use LauLamanApps\IzettleApi\Exception\IzettleApiException;

final class PaymentTypeNotConfiguredException extends Exception implements IzettleApiException
{
}
