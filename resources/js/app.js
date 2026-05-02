import './bootstrap';

document.addEventListener('livewire:initialized', () => {
    Livewire.on('close-mobile-menu', () => {
        setTimeout(() => {
            Livewire.dispatch('finish-closing-menu');
        }, 300);
    });
});

