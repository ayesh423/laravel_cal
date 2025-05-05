<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
        }
        
        .calculator {
            background-color: #333;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .display {
            background-color: #eee;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
            text-align: right;
            font-size: 24px;
            height: 30px;
        }
        
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        
        button {
            border: none;
            padding: 15px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            background-color: #555;
            color: white;
        }
        
        button:hover {
            background-color: #777;
        }
        
        .operator {
            background-color: #ff9500;
        }
        
        .operator:hover {
            background-color: #ffaa33;
        }
        
        .equals {
            background-color: #28a745;
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
    </style>
</head>
<body>
    <div class="calculator">
        <div class="display">0</div>
        <div class="buttons">
            <button class="clear">C</button>
            <button>±</button>
            <button>%</button>
            <button class="operator">÷</button>
            
            <button>7</button>
            <button>8</button>
            <button>9</button>
            <button class="operator">×</button>
            
            <button>4</button>
            <button>5</button>
            <button>6</button>
            <button class="operator">-</button>
            
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button class="operator">+</button>
            
            <button style="grid-column: span 2;">0</button>
            <button>.</button>
            <button class="equals">=</button>
        </div>
    </div>
</body>
</html>