<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #e0f7fa 0%, #e1bee7 50%, #f8bbd0 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        body::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(179, 229, 252, 0.4) 0%, transparent 50%),
                radial-gradient(circle at 80% 70%, rgba(240, 198, 234, 0.4) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(225, 245, 254, 0.3) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.8; transform: scale(1.05); }
        }

        main {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.98) 0%, rgba(250, 250, 255, 0.95) 100%);
            padding: 60px 55px;
            border-radius: 40px;
            box-shadow: 
                0 30px 90px rgba(179, 229, 252, 0.4),
                0 0 0 1px rgba(255, 255, 255, 0.9),
                inset 0 1px 0 rgba(255, 255, 255, 1);
            width: 100%;
            max-width: 550px;
            position: relative;
            z-index: 1;
            animation: floatIn 1s ease-out;
        }

        @keyframes floatIn {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        main::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, #b3e5fc, #c5cae9, #e1bee7, #f8bbd0);
            border-radius: 40px;
            z-index: -1;
            opacity: 0.6;
            filter: blur(25px);
            animation: glow 3s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% { opacity: 0.6; }
            50% { opacity: 0.9; }
        }

        h1 {
            text-align: center;
            background: linear-gradient(135deg, #81c6e8 0%, #b39ddb 50%, #f48fb1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 45px;
            font-size: 42px;
            font-weight: 900;
            letter-spacing: -2px;
            position: relative;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #81c6e8, #b39ddb, #f48fb1);
            border-radius: 10px;
            animation: expand 2s ease-in-out infinite;
        }

        @keyframes expand {
            0%, 100% { width: 60px; }
            50% { width: 100px; }
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 26px;
        }

        label {
            color: #7e97c7;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 10px;
            display: block;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            position: relative;
            padding-left: 12px;
        }

        label::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 14px;
            background: linear-gradient(180deg, #81c6e8, #b39ddb);
            border-radius: 10px;
        }

        input, textarea, select {
            width: 100%;
            padding: 18px 24px;
            border: 2px solid #e3f2fd;
            border-radius: 20px;
            font-size: 16px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-family: inherit;
            background: linear-gradient(145deg, #ffffff 0%, #fafcff 100%);
            color: #37474f;
            position: relative;
        }

        input:hover, textarea:hover, select:hover {
            border-color: #cce7f5;
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(129, 198, 232, 0.2);
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #b3e5fc;
            background: #ffffff;
            transform: translateY(-4px);
            box-shadow: 
                0 20px 50px rgba(129, 198, 232, 0.25),
                0 0 0 4px rgba(129, 198, 232, 0.15),
                inset 0 2px 4px rgba(255, 255, 255, 1);
        }

        input::placeholder, textarea::placeholder {
            color: #b8d4e8;
            font-weight: 400;
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cpath fill='%2381c6e8' d='M8 11L3 6h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
            padding-right: 50px;
        }

        button {
            background: linear-gradient(135deg, #81c6e8 0%, #b39ddb 50%, #f48fb1 100%);
            color: white;
            padding: 20px;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            margin-top: 20px;
            text-transform: uppercase;
            letter-spacing: 3px;
            box-shadow: 
                0 20px 50px rgba(129, 198, 232, 0.35),
                0 0 0 1px rgba(255, 255, 255, 0.2) inset;
            position: relative;
            overflow: hidden;
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.6s;
        }

        button::after {
            content: '→';
            position: absolute;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        button:hover {
            transform: translateY(-6px);
            box-shadow: 
                0 30px 70px rgba(129, 198, 232, 0.45),
                0 0 0 1px rgba(255, 255, 255, 0.3) inset;
        }

        button:hover::before {
            left: 100%;
        }

        button:hover::after {
            right: 20px;
        }

        button:active {
            transform: translateY(-3px);
        }

        div {
            display: flex;
            flex-direction: column;
            animation: slideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) backwards;
        }

        div:nth-child(1) { animation-delay: 0.1s; }
        div:nth-child(2) { animation-delay: 0.2s; }
        div:nth-child(3) { animation-delay: 0.3s; }
        div:nth-child(4) { animation-delay: 0.4s; }
        div:nth-child(5) { animation-delay: 0.5s; }

        button {
            animation: slideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) 0.6s backwards;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    @if(session('sucess'))
    <div class="notification is-primary">session('sucess')</div>
    @endif

    @yield('content')
    
</body>
</html>