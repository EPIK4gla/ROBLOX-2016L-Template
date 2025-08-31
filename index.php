-- Template and tutorial made by 4gla. --

1. Get ur RCC (Take 2016L for this template.) and client (Needs to be the same version as the RCC).
2. Patch clist, etc. Find guides there: https://discord.gg/y3VCwws9Hf.
3. Get the MD5 Hash from your client: https://emn178.github.io/online-tools/md5_checksum.html.
4. Put it in the folder "GetAllowedMD5Hashes", where it says "URCLIENTHASH".
5. Go in the folder "Game" and in Join.ashx.php. Add your domain, put your server's IP and Port.
6. In the same folder, go into PlaceLauncher.ashx.php and add your domain again. 
7. Again, in the same folder, go into LoadPlaceInfo.ashx.php and replace all "epik17.xyz" to your domain (10 chars: roblox.com, 14 chars: roblox.com/a/).
8. Generate an PrivateKey.pem using an tool, it's in the server on step 2.
9. Put it in the folder "Game".
10. Now, in the root folder (where are the files are in), you should see "version". Put version-XXXXXXXXXX (your client version).

If i forgot any folders/steps, let me know. 4gla on discord !