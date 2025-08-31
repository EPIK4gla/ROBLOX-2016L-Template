<?php
    header("Content-Type: text/plain");
    
    $username = (isset($username)) ? $_GET["username"] : "Player";
    $id = (isset($id)) ? $_GET["id"] : 1;
    $placeid = (isset($placeid)) ? $_GET["pid"] : 1818;
    $domain = "http://"; // put ur domain here!!
    $machineaddr = "" // <-- its ur server ip where u will host the games

    function get_signature($script)
    {
        $signature = "";
        openssl_sign($script, $signature, file_get_contents("PrivateKey.pem"), OPENSSL_ALGO_SHA1); // change this as needed
        return base64_encode($signature);
    }

    function generateWaitingForCharacterGuid() {
        return sprintf('%08x-%04x-%04x-%04x-%12x',
            mt_rand(), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand());
    }

    $joinscript = [
        "ClientPort" => 0,
        "MachineAddress" => addslashes($machineaddr),
        "ServerPort" => "53640",
        "PingUrl" => "",
        "PingInterval" => 20,
        "UserName" => $username,
        "SeleniumTestMode" => false,
        "UserId" => $id,
        "SuperSafeChat" => false,
        "CharacterAppearance" => "",
        "ClientTicket" => "", // if you dont know what is ClientTicket, it's a temporary key Roblox uses to prove you’re the real user.
        "GameId" => $placeid,
        "PlaceId" => $placeid,
        "MeasurementUrl" => "",
        "WaitingForCharacterGuid" => generateWaitingForCharacterGuid(),
        "BaseUrl" => $domain . "/",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => "0",
        "ScreenShotInfo" => "",
        "VideoInfo" => "",
        "CreatorId" => "1",
        "CreatorTypeEnum" => "User",
        "MembershipType" => "None",
        "AccountAge" => "3000000",
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => true,
        "IsRobloxPlace" => true,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => false,
        "SessionId" => "39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0||8|2021-03-03T17:04:47+01:00|0|null|null",
        "DataCenterId" => 0,
        "UniverseId" => 1,
        "BrowserTrackerId" => 0,
        "UsePortraitMode" => false,
        "FollowUserId" => 0,
        "characterAppearanceId" => 1
    ];

    $data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    $signature = get_signature("\r\n" . $data);
    exit("--rbxsig%". $signature . "%\r\n" . $data);
?>