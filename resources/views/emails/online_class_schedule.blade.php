<!DOCTYPE html>
<html>
<head>
    <title>Online Class</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #a2caed;
            padding: 20px;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            padding: 10px 20px;
            background-color: #ffffff;
            color: #ffffff;
            border-radius: 10px 10px 0 0;
            display: flex;
            justify-content: center; /* Horizontally center content */
            align-items: center; /* Vertically center content */
        }
        .content {
            margin-top: -30px;
            padding: 10px 20px;
            margin-bottom: 10px;

        }
        .footer {
            padding: 10px 20px;
            background-color: #003c64;
            color: #ffffff;
            border-radius: 0 0 10px 10px;
            justify-content: center; /* Horizontally center content */
        }
    </style>
</head>
<body>

    <div class="email-container">
        <div class="header">
            <a href="{{ route('admin.dashboard') }}" class="brand-logo">
                <div class="brand-logos">
                    <br>
                    <svg width="200" height="30" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 241.6 38.07"><defs><style>.cls-1{fill:#eae6e8;}.cls-2{fill:#bbbdc2;}.cls-3{fill:url(#linear-gradient);}.cls-4{fill:url(#linear-gradient-2);}.cls-5{fill:url(#linear-gradient-3);}.cls-6{fill:url(#linear-gradient-4);}.cls-7{fill:url(#linear-gradient-5);}.cls-8{fill:url(#linear-gradient-6);}.cls-9{fill:url(#linear-gradient-7);}.cls-10{fill:url(#linear-gradient-8);}.cls-11{fill:url(#linear-gradient-9);}.cls-12{fill:url(#linear-gradient-10);}</style><linearGradient id="linear-gradient" x1="34.34" x2="34.34" y2="38.07" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#01aaee"/><stop offset="1" stop-color="#124799"/></linearGradient><linearGradient id="linear-gradient-2" x1="0" y1="19.03" x2="28.14" y2="19.03" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-3" x1="87.28" y1="7.91" x2="87.28" y2="32.69" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-4" x1="113.19" y1="12.87" x2="113.19" y2="32.69" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-5" x1="184.42" y1="12.25" x2="184.42" y2="32.07" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-6" x1="231.5" y1="12.87" x2="231.5" y2="32.69" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-7" x1="104.94" y1="7.63" x2="120.65" y2="7.63" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-8" x1="136.94" y1="6.05" x2="136.94" y2="33" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-9" x1="160.75" y1="6.05" x2="160.75" y2="32.07" xlink:href="#linear-gradient"/><linearGradient id="linear-gradient-10" x1="208.05" y1="12.25" x2="208.05" y2="32.69" xlink:href="#linear-gradient"/></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><polygon class="cls-1" points="16.77 0 44.45 0 51.9 11.12 57.2 19.03 51.39 28.42 45.41 38.07 16.77 38.07 30.97 19.03 16.77 0"/><polygon class="cls-2" points="57.2 19.03 30.97 19.03 16.77 38.07 45.41 38.07 57.2 19.03"/><polygon class="cls-3" points="51.39 28.42 45.41 38.07 16.77 38.07 30.97 19.03 16.77 0 44.45 0 51.9 11.12 44.15 10.84 41.79 6.13 28.12 6.13 37.95 19.03 28.12 32.99 40.85 32.99 44.15 28.28 51.39 28.42"/><polygon class="cls-4" points="28.14 19.04 14.07 37.9 0 19.04 14.07 0.17 28.14 19.04"/><path class="cls-5" d="M95.34,14.42h4V11.73s0-3.82-3.09-3.82H79.17s-4,0-4,3.72v7.06s.62,3.47,3.72,3.47H95.09L95,28.35H81.76a2.26,2.26,0,0,1-2.22-2.47H75.2V29s0,3.74,3.72,3.74H95.56a4,4,0,0,0,3.8-4.13V21.92s0-4.1-3.71-4.1H79.54V12.25H93.17S95.65,12.25,95.34,14.42Z"/><path class="cls-6" d="M119.66,12.87H103.08v4.29h14.46a1.14,1.14,0,0,1,1,1.28v2.3H103.08v8.44s.28,3.51,3.23,3.51h17V16.37S122.6,12.87,119.66,12.87Zm-.9,15.2H108V24.64h10.72Z"/><path class="cls-7" d="M190.89,12.25H174.31v4.29h14.47a1.13,1.13,0,0,1,1,1.28v2.3H174.31v8.44s.28,3.51,3.24,3.51h17V15.75S193.83,12.25,190.89,12.25Zm-.9,15.2H179.27V24H190Z"/><path class="cls-8" d="M238,12.87H221.39v4.29h14.47a1.13,1.13,0,0,1,1,1.28v2.3H221.39v8.44s.28,3.51,3.24,3.51h17V16.37S240.91,12.87,238,12.87Zm-.9,15.2H226.35V24.64h10.72Z"/><rect class="cls-9" x="104.94" y="6.05" width="15.72" height="3.14"/><path class="cls-10" d="M142.41,6.05v6.51l-12.79.31c-2.27.31-2.69,3.44-2.69,3.44v13c0,2.48,3.71,3.72,3.71,3.72L147,32.69V6.05Zm-.19,21.81H131.57V17.2h10.65Z"/><path class="cls-11" d="M155.11,6.05h-4.33v26h4.33V17.2h11.15l-.12,14.87h4.58V16.46s-.12-4.21-3.84-4.21H155.11Z"/><path class="cls-12" d="M197.81,12.25V32.07h4.74V16.82l9.24.07s1.86,0,1.86,1.24V32.69h4.64L218,16.89s.14-4.33-3.65-4.64Z"/></g></g></svg>
                </div>
            </a>
        </div>
        <div class="content">
            <h5 style="font-size: 28px; margin-bottom: 20px;">New Online Class Scheduled!</h5>
            <p style="font-size: 16px; color: #333333;">A new class has been scheduled for the subject "{{ $courseName }}". Here are the details:</p>

            <ul>
                <li><span class="info-label">Title:</span> {{ $title }}</li>
                <li><span class="info-label">Date:</span> {{ $date }}</li>
                <li><span class="info-label">Time:</span> {{ $time }}</li>
                <li><span class="info-label">Teacher:</span> {{ $teacherName }}</li>
                <li><span class="info-label">Course:</span> {{ $courseName }}</li>
                <li><span class="info-label">About Class:</span> {{ $about_class }}</li>
            </ul>

            <p style="font-size: 16px; color: #333333;">Thank you, Your Sadhana Institute.</p>
        </div>




        <div class="footer">
            <p style="font-size: 14px; color: #ffffff;">This is an automated announcement. Please do not reply to this message.</p>
        </div>

    </div>

</body>
</html>
