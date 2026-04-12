<?php

namespace App\Constants;

class Constants
{
    // --- Basic Statuses ---
    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';

    // --- Approval/Application Statuses ---
    public const STATUS_PENDING = 'pending';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_REJECTED = 'rejected';

    // --- Progress/Event Statuses ---
    public const STATUS_UPCOMING = 'upcoming';
    public const STATUS_ONGOING = 'ongoing';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_CANCELLED = 'cancelled';
    public const STATUS_EXPIRED = 'expired';

    // --- Result Statuses ---
    public const STATUS_SUCCESS = 'success';
    public const STATUS_FAILED = 'failed';

    // --- System/Alert Statuses ---
    public const STATUS_ERROR = 'error';
    public const STATUS_WARNING = 'warning';
    public const STATUS_INFO = 'info';
    public const STATUS_DEFAULT = 'default';
    public const STATUS_CUSTOM = 'custom';

    // --- Turf/Booking Statuses ---
    public const STATUS_BOOKED = 'booked';
    public const STATUS_UNBOOKED = 'unbooked';

    // --- Payment Statuses ---
    public const PAYMENT_STATUS_PENDING = 'pending';
    public const PAYMENT_STATUS_PROCESSING = 'processing';
    public const PAYMENT_STATUS_SUCCESS = 'success';
    public const PAYMENT_STATUS_PAID = 'paid';
    public const PAYMENT_STATUS_FAILED = 'failed';
    public const PAYMENT_STATUS_CANCELED = 'canceled'; // One L
    public const PAYMENT_STATUS_CANCELLED = 'cancelled'; // Two Ls
    public const PAYMENT_STATUS_REFUNDED = 'refunded';
    public const PAYMENT_STATUS_PARTIALLY_REFUNDED = 'partially_refunded';
}
