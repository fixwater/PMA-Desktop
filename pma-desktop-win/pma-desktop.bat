for /f "tokens=3,4" %%a in ('"reg query HKEY_CLASSES_ROOT\http\shell\open\command"') do (set SoftWareRoot=%%a %%b)
start "" % SoftWareRoot % "http://localhost:88/"

%TEMP%/pma-desktop-win/php.exe -S localhost:88 -t %TEMP%/pma-desktop-win/

