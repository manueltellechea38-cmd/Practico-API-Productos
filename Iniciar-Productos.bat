@echo off
cd /d "%~dp0"

start "Backend - Productos" /min cmd /k php -S localhost:3000 -t backend
start "Frontend - Productos" /min cmd /k php -S 127.0.0.1:5501 -t frontend

timeout /t 2 /nobreak >nul

start "" chrome.exe "http://127.0.0.1:5501/index.html"
