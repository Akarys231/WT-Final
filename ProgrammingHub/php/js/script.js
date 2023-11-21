var learnMoreButtons = document.querySelectorAll(".learn-more-button");
learnMoreButtons.forEach(function (button) {
    button.addEventListener("click", function () {
        var additionalContent = this.nextElementSibling;
        if (additionalContent.style.display === "none" || additionalContent.style.display === "") {
            additionalContent.style.display = "block";
        } else {
            additionalContent.style.display = "none";
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('myForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        if (name === '' || email === '') {
            document.getElementById('alertMessage').style.display = 'block';
        } else {
            alert('Thank you, ' + name + '! We will contact you at '+ email);
            document.getElementById('name').value = '';
            document.getElementById('email').value = '';
            message.value = '';
            document.getElementById('alertMessage').style.display = 'none';
        }
    });
});


 const timerDuration = 300; // 300 sec = 5 min
 let timeRemaining = timerDuration;

 const timer = setInterval(updateTimer, 1000);

 function updateTimer() {
     const minutes = Math.floor(timeRemaining / 60);
     const seconds = timeRemaining % 60;
     document.getElementById('timer').textContent = `Time Remaining: ${minutes}:${seconds}`;
     
     timeRemaining--;

     if (timeRemaining < 0) {
         clearInterval(timer);
         calculateScore();
     }
 }

 function calculateScore() {
    const questions = document.querySelectorAll('.question');
    let score = 0;

    const correctAnswers = [
        ["A"], // 1  
        ["C"], // 2  
        ["C"], // 3  
        ["B"], // 4  
        ["A"], // 5  
        ["A"], // 6  
        ["C"], // 7
        ["B"], // 8
        ["A"], // 9 
        ["C"], // 10
    ];
    

    questions.forEach((question, index) => {
        const radioButtons = question.querySelectorAll('input[type="radio"]');
        const userAnswers = [];

        radioButtons.forEach(radioButton => {
            if (radioButton.checked) {
                userAnswers.push(radioButton.value);
            }
        });

        const correctAnswer = correctAnswers[index];
        if (arraysEqual(userAnswers, correctAnswer)) {
            score++;
        }
    });

    const resultMessage = `Your Score: ${score} / ${questions.length}`;
    alert(resultMessage);
}

function arraysEqual(arr1, arr2) {
    if (arr1.length !== arr2.length) return false;
    for (let i = 0; i < arr1.length; i++) {
        if (arr1[i] !== arr2[i]) return false;
    }
    return true;
}