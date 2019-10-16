for /f "delims=" %%i in ("%0") do set "curpath=%%~dpi";
mklink /D C:\xampp\htdocs\toko-online %curpath%
pause