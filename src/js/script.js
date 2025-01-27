
    
    window.addEventListener('DOMContentLoaded', (event) => {
        const errorMessage = document.getElementById('error');
        if (errorMessage) {

            setTimeout(() => {
                errorMessage.style.transition = "opacity 0.5s ease";
                errorMessage.style.opacity = 0;

                setTimeout(() => {
                    errorMessage.remove();
                }, 500);
            }, 5000); 
        }
    });

