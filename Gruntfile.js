module.exports = function(grunt) {

    grunt.initConfig({
        watch: {
            files: 'sass/*.scss',
            tasks: ['sass:dev']
        },
        sass: {
            dev: {
                options: {
                  style: 'compressed'
                },
                files: {
                    'css/styles.css': 'sass/styles.scss'
                }
            }
        },
        browserSync: {
            default_options: {
                bsFiles: {
                    src: [
                        "css/*.css",
                        'images/*',
                        'js/*.js',
                    ]
                }
            }
        }
    });

grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-browser-sync');

grunt.registerTask('default', ['browserSync', 'watch']);

};
