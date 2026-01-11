import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// WhatsApp Float Component
Alpine.data('whatsappFloat', () => ({
    isDragging: false,
    position: { x: 0, y: 0 },
    startPos: { x: 0, y: 0 },
    dragHandler: null,
    stopHandler: null,
    
    init() {
        // Create bound handlers
        this.dragHandler = this.drag.bind(this);
        this.stopHandler = this.stopDrag.bind(this);
        
        // Load saved position from localStorage
        const saved = localStorage.getItem('whatsappPosition');
        if (saved) {
            try {
                const pos = JSON.parse(saved);
                if (pos.x !== undefined && pos.y !== undefined && pos.x > 0 && pos.y > 0) {
                    this.position = pos;
                    this.$el.style.left = pos.x + 'px';
                    this.$el.style.top = pos.y + 'px';
                    this.$el.style.right = 'auto';
                    this.$el.style.bottom = 'auto';
                    return;
                }
            } catch (e) {
                console.error('Error loading WhatsApp position:', e);
            }
        }
        
        // Default position: bottom-right corner (keep CSS default)
        // Calculate default position based on viewport
        setTimeout(() => {
            const rect = this.$el.getBoundingClientRect();
            const defaultX = window.innerWidth - rect.width - 24; // 24px = 1.5rem
            const defaultY = window.innerHeight - rect.height - 24;
            this.position = { x: defaultX, y: defaultY };
        }, 100);
    },
    
    startDrag(e) {
        this.isDragging = true;
        const rect = this.$el.getBoundingClientRect();
        const clientX = e.clientX || (e.touches && e.touches[0].clientX);
        const clientY = e.clientY || (e.touches && e.touches[0].clientY);
        
        this.startPos = {
            x: clientX - rect.left,
            y: clientY - rect.top
        };
        
        document.addEventListener('mousemove', this.dragHandler);
        document.addEventListener('mouseup', this.stopHandler);
        if (e.touches) {
            document.addEventListener('touchmove', this.dragHandler, { passive: false });
            document.addEventListener('touchend', this.stopHandler);
        }
    },
    
    drag(e) {
        if (!this.isDragging) return;
        e.preventDefault();
        const clientX = e.clientX || (e.touches && e.touches[0].clientX);
        const clientY = e.clientY || (e.touches && e.touches[0].clientY);
        
        let x = clientX - this.startPos.x;
        let y = clientY - this.startPos.y;
        
        // Constrain to viewport
        const maxX = window.innerWidth - this.$el.offsetWidth;
        const maxY = window.innerHeight - this.$el.offsetHeight;
        x = Math.max(0, Math.min(x, maxX));
        y = Math.max(0, Math.min(y, maxY));
        
        this.position = { x, y };
        this.$el.style.left = x + 'px';
        this.$el.style.top = y + 'px';
        this.$el.style.right = 'auto';
        this.$el.style.bottom = 'auto';
    },
    
    stopDrag() {
        if (this.isDragging) {
            this.isDragging = false;
            // Save position to localStorage
            try {
                localStorage.setItem('whatsappPosition', JSON.stringify(this.position));
            } catch (e) {
                console.error('Error saving WhatsApp position:', e);
            }
        }
        document.removeEventListener('mousemove', this.dragHandler);
        document.removeEventListener('mouseup', this.stopHandler);
        document.removeEventListener('touchmove', this.dragHandler);
        document.removeEventListener('touchend', this.stopHandler);
    }
}));

Alpine.start();

// Scroll animations
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.fade-in-on-scroll').forEach(el => {
        observer.observe(el);
    });
});
