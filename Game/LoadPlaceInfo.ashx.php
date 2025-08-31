<?php

header("content-type:text/plain");

ob_start();

// replace all epik17.xyz to ur 10 chars domain.
?>


-- Loaded by StartGameSharedScript -- pcall(function() game:SetCreatorID(1, Enum.CreatorType.User) end) pcall(function() game:GetService("SocialService"):SetFriendUrl("http://www.epik17.xyz/Game/LuaWebService/HandleSocialRequest.ashx?method=IsFriendsWith&playerid=%d&userid=%d") end) pcall(function() game:GetService("SocialService"):SetBestFriendUrl("http://www.epik17.xyz/Game/LuaWebService/HandleSocialRequest.ashx?method=IsBestFriendsWith&playerid=%d&userid=%d") end) pcall(function() game:GetService("SocialService"):SetGroupUrl("http://www.epik17.xyz/Game/LuaWebService/HandleSocialRequest.ashx?method=IsInGroup&playerid=%d&groupid=%d") end) pcall(function() game:GetService("SocialService"):SetGroupRankUrl("http://www.epik17.xyz/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRank&playerid=%d&groupid=%d") end) pcall(function() game:GetService("SocialService"):SetGroupRoleUrl("http://www.epik17.xyz/Game/LuaWebService/HandleSocialRequest.ashx?method=GetGroupRole&playerid=%d&groupid=%d") end) pcall(function() game:GetService("GamePassService"):SetPlayerHasPassUrl("http://www.epik17.xyz/Game/GamePass/GamePassHandler.ashx?Action=HasPass&UserID=%d&PassID=%d") end) pcall(function() game:GetService("MarketplaceService"):SetProductInfoUrl("https://api.epik17.xyz/marketplace/productinfo?assetId=%d") end) pcall(function() game:GetService("MarketplaceService"):SetDevProductInfoUrl("https://api.epik17.xyz/marketplace/productDetails?productId=%d") end) pcall(function() game:GetService("MarketplaceService"):SetPlayerOwnsAssetUrl("https://api.epik17.xyz/ownership/hasasset?userId=%d&assetId=%d") end) pcall(function() game:SetPlaceVersion(1) end) pcall(function() game:SetVIPServerOwnerId(0) end)
<?php
$data = ob_get_clean();
$signature;
$key = file_get_contents("PrivateKey.pem");
openssl_sign($data, $signature, $key, OPENSSL_ALGO_SHA1);
echo sprintf("--rbxsig%%%s%%%s", base64_encode($signature), $data);

?>