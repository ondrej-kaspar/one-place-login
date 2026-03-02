import { Dropdown } from "./components/dropdown";
import { Form } from "./components/form";

function init() {
    Dropdown();
    Form();
    
    // Verify code
    (function() {
        const input = document.getElementById('code');
        const btn = document.getElementById('submit-btn');
        if (!input || !btn) return;
        
        input.addEventListener('input', () => btn.disabled = input.value === '');
    })();
    
}

document.addEventListener('DOMContentLoaded', init);


