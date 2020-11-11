
        function doSum() {
            var a = parseInt(document.getElementById("a").value);
            var b = parseInt(document.getElementById("b").value);

            var result =  a + b;

            document.getElementById("res").value = result;
        }

        function doSubstraction() {
            var a = parseInt(document.getElementById("a").value);
            var b = parseInt(document.getElementById("b").value);

            var result =  a - b;

            document.getElementById("res").value = result;
        }

        function doProduct() {
            var a = parseInt(document.getElementById("a").value);
            var b = parseInt(document.getElementById("b").value);

            var result =  a * b;

            document.getElementById("res").value = result;
        }

        function doDivision() {
            var a = parseInt(document.getElementById("a").value);
            var b = parseInt(document.getElementById("b").value);

            var result =  a / b;

            document.getElementById("res").value = result;
        }

        function calculate(){
            var operator = document.getElementById("op").value;

            switch (operator){
                case "+":
                    doSum();
                    break;
                case "-":
                    doSubstraction();
                    break;
                case "*":
                    doProduct();
                    break;
                case "/":
                    doDivision();
                    break;
                default:
                    break;

            }
        }


function showResult(){
            let word = document.getElementById("word").value;

            if (isPalindrome(word)) {
                document.getElementById("res").value = "Its a palindrome";
                // alert("Its a palindrome");
            }
            else {
                document.getElementById("res").value = "Its NOT a palindrome";
                // alert("Its NOT a palindrome");
            }
        }


        function isPalindrome(word){
            result = true;
            for (let i = 0; i < word.length / 2; ++i) {
                if (word[i] !== word[word.length - 1 - i]) {
                    result = false;
                    break;        
                }
            }
            return result;

        }


        function showHistogram(){
            var numbers = document.getElementById("text").value.trim().split(' ');
            var num = 0;

            for(var i = 0; i < numbers.length; i++){
                num = numbers[i];
                // document.getElementById("output").innerText = numbers[i];
                // console.log(numbers[i]);
                row = String(numbers[i]);
                for(var j = 0;  j < num; j++){
                    // console.log('*');
                    row = row + '*'
                }

                console.log(row);
                // document.getElementById("output").innerText = row;
                document.writeln(row);
                document.write("<br>");
            }
        }