<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        @livewire('test')
    </div>
    <script>
        window.MathJax = {
            tex: {
                inlineMath: [
                    ['$', '$'],
                    ['\\(', '\\)']
                ]
            },
            svg: {
                fontCache: 'global'
            }
        };

        (function() {
            var script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-svg.js';
            script.async = true;
            document.head.appendChild(script);
        })();

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
                console.log('initialized')
            })
            Livewire.hook('element.initialized', (el, component) => {
                console.log('element initialized')
            })
            Livewire.hook('element.updating', (fromEl, toEl, component) => {
                MathJax.typeset()
            })
            Livewire.hook('element.updated', (el, component) => {
                MathJax.typeset()
            })
            Livewire.hook('element.removed', (el, component) => {})
            Livewire.hook('message.sent', (message, component) => {})
            Livewire.hook('message.failed', (message, component) => {})
            Livewire.hook('message.received', (message, component) => {})
            Livewire.hook('message.processed', (message, component) => {})
        });
    </script>
</x-app-layout>