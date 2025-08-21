        // Mobile menu toggle
        const mobileMenu = document.getElementById('mobileSidebar');
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        
        mobileMenuButton.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileMenu.classList.remove('-translate-x-full');
        });
        
        document.addEventListener('click', function() {
            mobileMenu.classList.add('-translate-x-full');
        });
        
        // Prevent menu from closing when clicking inside it
        mobileMenu.addEventListener('click', function(e) {
            e.stopPropagation();
        });

        // Vote Distribution Chart
        const voteCtx = document.getElementById('voteChart').getContext('2d');
        const voteChart = new Chart(voteCtx, {
            type: 'bar',
            data: {
                labels: ['John Smith', 'Sarah Johnson', 'Michael Chen', 'Emma Wilson', 'David Brown', 'Others'],
                datasets: [{
                    label: 'Votes',
                    data: [4892, 3745, 2156, 1023, 876, 764],
                    backgroundColor: [
                        'rgba(139, 92, 246, 0.7)',
                        'rgba(59, 130, 246, 0.7)',
                        'rgba(16, 185, 129, 0.7)',
                        'rgba(234, 179, 8, 0.7)',
                        'rgba(239, 68, 68, 0.7)',
                        'rgba(156, 163, 175, 0.7)'
                    ],
                    borderColor: [
                        'rgba(139, 92, 246, 1)',
                        'rgba(59, 130, 246, 1)',
                        'rgba(16, 185, 129, 1)',
                        'rgba(234, 179, 8, 1)',
                        'rgba(239, 68, 68, 1)',
                        'rgba(156, 163, 175, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    }
                }
            }
        });

        // Voting Timeline Chart
        const timelineCtx = document.getElementById('timelineChart').getContext('2d');
        const timelineChart = new Chart(timelineCtx, {
            type: 'line',
            data: {
                labels: ['6 AM', '8 AM', '10 AM', '12 PM', '2 PM', '4 PM', '6 PM', '8 PM'],
                datasets: [{
                    label: 'Votes per hour',
                    data: [120, 450, 780, 1020, 1450, 1800, 2100, 2350],
                    fill: true,
                    backgroundColor: 'rgba(99, 102, 241, 0.2)',
                    borderColor: 'rgba(99, 102, 241, 1)',
                    tension: 0.4,
                    pointBackgroundColor: 'rgba(99, 102, 241, 1)'
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(255, 255, 255, 0.1)'
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            color: 'rgba(255, 255, 255, 0.7)'
                        }
                    }
                }
            }
        });

                // Candidates Carousel
        const carousel = document.querySelector('.candidates-carousel');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');

        nextBtn.addEventListener('click', () => {
            carousel.scrollBy({ left: 300, behavior: 'smooth' });
        });

        prevBtn.addEventListener('click', () => {
            carroll.scrollBy({ left: -300, behavior: 'smooth' });
        });