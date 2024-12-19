<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres en Línea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        let currentPlayer = 'X';
        let gameBoard = ['', '', '', '', '', '', '', '', ''];
        let gameOver = false; 
        
        function play(index) {
            if (gameBoard[index] === '' && !gameOver) {
                
                gameBoard[index] = currentPlayer;
                document.getElementById('cell' + index).value = currentPlayer;

                
                if (checkWin()) {
                    alert(currentPlayer + ' ha ganado!');
                    gameOver = true;
                }



                
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';

                
                if (currentPlayer === 'O' && !gameOver) {
                    makeRandomMove();
                }
            }
        }

        
        function makeRandomMove() {
            let availableMoves = [];
            for (let i = 0; i < gameBoard.length; i++) {
                if (gameBoard[i] === '') {
                    availableMoves.push(i);
                }
            }

            if (availableMoves.length > 0) {
                let randomIndex = availableMoves[Math.floor(Math.random() * availableMoves.length)];
                gameBoard[randomIndex] = 'O';
                document.getElementById('cell' + randomIndex).value = 'O';
                if (checkWin()) {
                    alert('O ha ganado!');
                    gameOver = true;
                } else {
                    currentPlayer = 'X'; 
                }
            }
        }

       
        function checkWin() {
            const winningCombos = [
                [0, 1, 2], [3, 4, 5], [6, 7, 8],
                [0, 3, 6], [1, 4, 7], [2, 5, 8],
                [0, 4, 8], [2, 4, 6]
            ];

            for (let combo of winningCombos) {
                if (gameBoard[combo[0]] !== '' && gameBoard[combo[0]] === gameBoard[combo[1]] && gameBoard[combo[0]] === gameBoard[combo[2]]) {
                    return true;
                }
            }

            return false;
        }

        
        function resetGame() {
            gameBoard = ['', '', '', '', '', '', '', '', ''];
            currentPlayer = 'X';
            gameOver = false;

            for (let i = 0; i < 9; i++) {
                document.getElementById('cell' + i).value = '';
            }
        }
    </script>
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center">Juego de Tres en Línea</h2>

        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-primary mx-2" onclick="window.location.href='CVistaF1'">Formulario 1</button>
            <button class="btn btn-primary mx-2" onclick="window.location.href='CFormF1'">Formulario 2</button>
        </div>

        <div class="d-flex justify-content-center mb-4">
            <button class="btn btn-warning" onclick="resetGame()">Reiniciar Juego</button>
        </div>

        <div class="d-flex justify-content-center">
            <div class="row" style="width: 180px;">
                <div class="col-4 p-2">
                    <input type="text" id="cell0" class="form-control" onclick="play(0)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell1" class="form-control" onclick="play(1)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell2" class="form-control" onclick="play(2)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell3" class="form-control" onclick="play(3)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell4" class="form-control" onclick="play(4)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell5" class="form-control" onclick="play(5)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell6" class="form-control" onclick="play(6)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell7" class="form-control" onclick="play(7)" readonly>
                </div>
                <div class="col-4 p-2">
                    <input type="text" id="cell8" class="form-control" onclick="play(8)" readonly>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
