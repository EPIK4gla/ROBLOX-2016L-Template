<?php
$gameInfo2 = [
        'AssetId' => "1",
        'ProductId' => "1",
        'Name' => "2016 TEMPLATE",
        'Description' => "Made by 4gla",
        'AssetTypeId' => "9",
        'Creator' => [
            'Id' => "1",
            'Name' => "4gla",
            'CreatorType' => 'User',
            'CreatorTargetId' => "1",
        ],
        'IconImageAssetId' => 139122,
        'Created' => "",
        'Updated' => date('c'),
        'PriceInRobux' => null,
        'PriceInTickets' => null,
        'Sales' => 0,
        'IsNew' => false,
        'IsForSale' => true,
        'IsPublicDomain' => false,
        'IsLimited' => false,
        'IsLimitedUnique' => false,
        'Remaining' => null,
        'MinimumMembershipLevel' => 0,
        'ContentRatingTypeId' => 0,
    ];

header('Content-Type: application/json');
echo json_encode($gameInfo2, JSON_PRETTY_PRINT);

?>
