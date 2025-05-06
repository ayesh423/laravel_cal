<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e5e5e5;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .calculator {
            background-color: #1e1e1e;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
            padding: 20px;
            width: 320px;
        }

        .display {
            background-color: #f8f8f8;
            border-radius: 10px;
            font-size: 28px;
            padding: 15px;
            text-align: right;
            margin-bottom: 20px;
            color: #000;
            min-height: 40px;
            overflow-x: auto;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }

        button {
            padding: 20px;
            font-size: 18px;
            border-radius: 10px;
            border: none;
            background-color: #444;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        button:hover {
            background-color: #555;
        }

        .operator {
            background-color: #ff9500;
        }

        .operator:hover {
            background-color: #ffa733;
        }

        .equals {
            background-color: #28a745;
            grid-column: span 1;
        }

        .equals:hover {
            background-color: #34ce57;
        }

        .clear {
            background-color: #dc3545;
        }

        .clear:hover {
            background-color: #e4606d;
        }

        .zero {
            grid-column: span 2;
        }
    </style>
</head>
<body>
    <form action="{{ route('calculator') }}" method="POST">
        @csrf
        <div class="calculator">
            <div class="display">{{ session('answer', 0) }}</div>
            <div class="buttons">
                <!-- Row 1 -->
                <button type="submit" name="input" value="C" class="clear">C</button>
                <button type="submit" name="input" value="±">±</button>
                <button type="submit" name="input" value="%">%</button>
                <button type="submit" name="input" value="÷" class="operator">÷</button>

                <!-- Row 2 -->
                <button type="submit" name="input" value="7">7</button>
                <button type="submit" name="input" value="8">8</button>
                <button type="submit" name="input" value="9">9</button>
                <button type="submit" name="input" value="×" class="operator">×</button>

                <!-- Row 3 -->
                <button type="submit" name="input" value="4">4</button>
                <button type="submit" name="input" value="5">5</button>
                <button type="submit" name="input" value="6">6</button>
                <button type="submit" name="input" value="-" class="operator">-</button>

                <!-- Row 4 -->
                <button type="submit" name="input" value="1">1</button>
                <button type="submit" name="input" value="2">2</button>
                <button type="submit" name="input" value="3">3</button>
                <button type="submit" name="input" value="+" class="operator">+</button>

                <!-- Row 5 -->
                <button type="submit" name="input" value="0" class="zero">0</button>
                <button type="submit" name="input" value=".">.</button>
                <button type="submit" name="input" value="=" class="equals">=</button>
            </div>
        </div>
    </form>
</body>
</html>
