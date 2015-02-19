<?php
/**
 * Contains EWSType_SyncFolderItemsResponseMessageType.
 */

use jamesiarmes\PEWS\Type\ResponseMessageType;

/**
 * Represents the status and result of a single SyncFolderItems operation
 * request.
 *
 * @package php-ews\Types
 */
class EWSType_SyncFolderItemsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a sequence array of change types that represent the types of
     * differences between the items on the client and the items on the Exchange
     * server.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SyncFolderItemsChangesType
     */
    public $Changes;

    /**
     * Indicates whether the last item to synchronize has been included in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IncludesLastItemInRange;

    /**
     * Contains a base64-encoded form of the synchronization data that is
     * updated after each successful request.
     *
     * This is used to identify the synchronization state.
     * .
     * @since Exchange 2007
     *
     * @var string
     */
    public $SyncState;
}