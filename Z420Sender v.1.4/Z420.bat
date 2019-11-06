@echo off
:start
set ESC=
set Blue=%ESC%[34m
                                                                       
                                                                       
echo.  
echo %Blue%                       ZZZZZZZZZZZZZZZZZZZ  444444444   222222222222222         000000000     
echo %Blue%                       Z:::::::::::::::::Z 4::::::::4  2:::::::::::::::22     00:::::::::00   
echo %Blue%                       Z:::::::::::::::::Z4:::::::::4  2::::::222222:::::2  00:::::::::::::00 
echo %Blue%                       Z:::ZZZZZZZZ:::::Z4::::44::::4  2222222     2:::::2 0:::::::000:::::::0
echo %Blue%                       ZZZZZ     Z:::::Z4::::4 4::::4              2:::::2 0::::::0   0::::::0
echo %Blue%                               Z:::::Z 4::::4  4::::4              2:::::2 0:::::0     0:::::0
echo %Blue%                              Z:::::Z 4::::4   4::::4           2222::::2  0:::::0     0:::::0
echo %Blue%                             Z:::::Z 4::::444444::::444    22222::::::22   0:::::0 000 0:::::0
echo %Blue%                            Z:::::Z  4::::::::::::::::4  22::::::::222     0:::::0 000 0:::::0
echo %Blue%                           Z:::::Z   4444444444:::::444 2:::::22222        0:::::0     0:::::0
echo %Blue%                          Z:::::Z              4::::4  2:::::2             0:::::0     0:::::0
echo %Blue%                       ZZZ:::::Z     ZZZZZ     4::::4  2:::::2             0::::::0   0::::::0
echo %Blue%                       Z::::::ZZZZZZZZ:::Z     4::::4  2:::::2       2222220:::::::000:::::::0
echo %Blue%                       Z:::::::::::::::::Z   44::::::442::::::2222222:::::2 00:::::::::::::00 
echo %Blue%                       Z:::::::::::::::::Z   4::::::::42::::::::::::::::::2   00:::::::::00   
echo %Blue%                       ZZZZZZZZZZZZZZZZZZZ   444444444422222222222222222222     000000000   
echo.  
echo %Blue%============================================== Z420 BATCH CHOOSEN ==============================================
echo.
echo.
echo 1. Open Z420 Sender [Ready]
echo 2. Ip Info
echo 3. Close Batch
echo.
set /p pilihan=Choose command : 
IF '%pilihan%' == '%pilihan%' GOTO Item_%pilihan%
:Item_1
set /p dir=Directory : 
start /MIN /D%dir%\ php Z420Original.php
GOTO Start
:Item_2
echo Computer Name: %computername%
echo Current User: %username%
FOR /F "tokens=2 delims=:" %%a IN ('ipconfig ^| findstr /IC:"IPv4 Address"') DO echo IP Address:%%a
echo.
pause
GOTO Start
:Item_3
exit