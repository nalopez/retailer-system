module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        concat: {
            "options": { "separator": ";" },
            "build": {
                "src": ["public/js/src/custom/login.js"],
                "dest": "public/js/concat/app.js"
            }
        },
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                }
            },
            src: {
                files: [{
                    expand: true,
                    cwd: 'public/css/src/custom/',
                    src: ['**/*.scss'],
                    dest: 'public/css/src/custom/css/',
                    ext: '.css'
                }]
            }
        },
        concat_css: {
            all: {
                src: ["public/css/src/**/*.css"],
                dest: "public/css/concat/app.css"
            },
        },
        cssmin: {
            target: {
                files: [{
                    'public/css/concat/app.min.css': 'public/css/concat/app.css'
                }]
            }
        },
        watch: {
            css: {
                files: "public/css/**/*.scss",
                tasks: ['sass', 'concat_css', 'cssmin'],
            }
        }
    });

    // Load required modules
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-concat-css');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // Task definitions
    grunt.registerTask('default', ['concat', 'sass', 'concat_css', 'cssmin', 'watch']);
};