(function($)
{
            $(".owl-carousel").owlCarousel({
                loop: true, //Зацикливаем слайдер
                margin: 20, //Отступ от элемента справа в 50px
                nav: false, //Отключение навигации
                dots: true, //Отключение навигации
                autoplay: true, //Автозапуск слайдера
                smartSpeed: 2000, //Время движения слайда
                autoplayTimeout: 4000, //Время смены слайда
                responsive:{ //Адаптивность. Кол-во выводимых элементов при определенной ширине.
                    0:{
                        items:1
                    },
                    600:{
                        items:1
                    },
                    1000:{
                        items:1
                    }
                }
            });
})(jQuery);
