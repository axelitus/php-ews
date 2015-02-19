<?php
/**
 * Contains EWSType_ArrayOfRealItemsType.
 */

/**
 * Represents an array of items.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRealItemsType extends EWSType
{
    /**
     * Represents an Exchange calendar item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\CalendarItemType
     */
    public $CalendarItem;

    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ContactItemType
     */
    public $Contact;

    /**
     * Represents a distribution list.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\DistributionListType
     */
    public $DistributionList;

    /**
     * Represents an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\ItemType
     */
    public $Item;

    /**
     * Represents a meeting cancellation in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingCancellationMessageType
     */
    public $MeetingCancellation;

    /**
     * Represents a meeting message in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingMessageType
     */
    public $MeetingMessage;

    /**
     * Represents a meeting request in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingRequestMessageType
     */
    public $MeetingRequest;

    /**
     * Represents a meeting response in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingResponseMessageType
     */
    public $MeetingResponse;

    /**
     * Represents an Exchange e-mail message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PEWS\Type\MessageType
     */
    public $Message;

    /**
     * Represents a post item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PostItemType
     */
    public $PostItem;

    /**
     * Represents a task in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TaskType
     */
    public $Task;
}