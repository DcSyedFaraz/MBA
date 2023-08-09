module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        // "./resources/**/*.vue",
    ],
    theme: {
        container: {
              screens: {
                '2xl': { max: '1219px' },
                xl: { max: '939px' },
                lg: { max: '707px' },
                md: { max: '479px' },
                sm: { max: '413px' },

                minsm: { min: '414px' },
                minmd: { min: '480px' },
                minlg: { min: '708px' },
                minxl: { min: '940px' },
                min2xl: { min: '1220px' },
              },

        },
        extend: {
            backgroundImage: theme => ({
                'top-bg': "url('../imgs/topbg.jpg')",
                'top': "url('../imgs/bg.png')",
            }),
            content: {
                'play': 'url("../../imgs/play.png")',
            },
            colors: {
                // 'primary-one': '#c81431', //red
                // 'primary-two': '#f7c228', //yellow
                // 'primary-three': '#467e3b', //green
                // 'heading-color': '#161922', //grayText
                // 'secondary' : '#292B33',
                // 'secondary-dark' : '#010E21',
                // 'big-bg':'#292B33',//gray
                // 'small-bg':'#010E21', //navy

                // 'primary-one': '#305076', // blue
                // 'primary-two': '#9B9CC5', //light blue
                // 'primary-three': '#7bb3e8', //sky blue
                // 'heading-color': '#161922', //gray blue
                // 'secondary' : '#292B33',
                // 'secondary-dark' : '#010E21',
                // 'big-bg':'#292B33',//gray
                // 'small-bg':'#010E21', //navy

                'primary-one': '#262626', //sea green
                'primary-two': '#007691', //black
                'primary-three': '#f8fafc', //orange
                'primary-four': '#f8fafc', //purple
                'primary-five':'#f8fafc', //orange drk
                'primary-six':'#f8fafc', //purple light
                'primary-seven':'#f8fafc', //sky blue
                'primary-Eight':'#f8fafc', //kai green
                'primary-nine':'#f8fafc', //drk blue
                'primary-ten':'#f8fafc', //skin
                'primary-box':'#f8fafc',
                'primary-next':'#f8fafc', //purple
                'primary-next1':'#f8fafc', //sky blue
                'primary-next2':'#f8fafc', //green
                'primary-next3':'#f8fafc', //drkblue
                'primary-next4':'#f8fafc', //skin
                'primary-next5':'#f8fafc', //orange
                'footer-color':'#262626', //red



            },

            keyframes: {
                'blink': {
                    '50%': {
                        opacity: '0',
                        transform: 'translateY(-10px)'
                    },

                },

                'wave': {
                  '0%': { transform: 'rotate(0.0deg)' },
                  '10%': { transform: 'rotate(14deg)' },
                  '20%': { transform: 'rotate(-8deg)' },
                  '30%': { transform: 'rotate(14deg)' },
                  '40%': { transform: 'rotate(-4deg)' },
                  '50%': { transform: 'rotate(10.0deg)' },
                  '60%': { transform: 'rotate(0.0deg)' },
                  '100%': { transform: 'rotate(0.0deg)' },
                },
            },


            animation: {
                'blink': 'blink 0.5s step-start infinite',
                'waving-hand': 'wave 4s linear infinite',
                'bounce': 'bounce 1s infinite',
            }
        },
        plugins: [],
    }
}
