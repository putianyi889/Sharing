[General]
SyntaxVersion=2
BeginHotkey=121
BeginHotkeyMod=0
PauseHotkey=0
PauseHotkeyMod=0
StopHotkey=123
StopHotkeyMod=0
RunOnce=1
EnableWindow=
MacroID=27907485-59d5-4419-85a1-941ac34b9edc
Description=ÔÒ½©Ê¬½Å±¾¹Ò»ú
Enable=1
AutoRun=0
[Repeat]
Type=0
Number=1
[SetupUI]
Type=2
QUI=
[Relative]
SetupOCXFile=
[Comment]

[Script]
hwnd = Plugin.Window.Find(0, "Plants vs. Zombies")
While 1
    Call Plugin.Bkgnd.LeftClick(hwnd, 720, 396)
    Delay 2000
    While Plugin.BGCP2_02.GetPixelColor(hwnd, 18, 447) = &H13139D
        Call Plugin.Bkgnd.LeftClick(hwnd, 390, 450)
        If Plugin.BGCP2_02.GetPixelColor(hwnd, 165, 69) = &HE3EFF1 Then 
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 314, 132)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 314, 225)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 314, 323)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 314, 422)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 314, 523)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 406, 132)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 406, 225)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 406, 323)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 406, 422)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 406, 523)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 480, 132)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 480, 225)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 480, 323)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 480, 422)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 480, 523)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 558, 132)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 558, 225)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 558, 323)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 558, 422)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 558, 523)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 640, 132)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 640, 225)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 640, 323)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 640, 422)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 640, 523)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 715, 132)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 715, 225)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 715, 323)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 715, 422)
            Call Plugin.Bkgnd.LeftClick(hwnd, 179, 40)
            Call Plugin.Bkgnd.LeftClick(hwnd, 715, 523)
        End If
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 314, 132)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 314, 225)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 314, 323)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 314, 422)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 314, 523)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 406, 132)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 406, 225)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 406, 323)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 406, 422)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 406, 523)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 480, 132)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 480, 225)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 480, 323)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 480, 422)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 480, 523)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 558, 132)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 558, 225)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 558, 323)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 558, 422)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 558, 523)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 640, 132)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 640, 225)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 640, 323)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 640, 422)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 640, 523)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 715, 132)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 715, 225)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 715, 323)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 715, 422)
        Delay 5
        Call Plugin.Bkgnd.LeftDoubleClick(hwnd, 715, 523)
        Delay 5
    Wend
Wend