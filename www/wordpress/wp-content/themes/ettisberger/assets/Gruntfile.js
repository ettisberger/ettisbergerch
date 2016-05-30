module.exports = function(grunt) {
    grunt.initConfig({
        sass: {
            all: {
                options: {
                    sourcemap: 'none',
                    style: 'expanded'
                },
                files: {
                    '.tmp/style.css': 'scss/style.scss'
                }
            }
        },
        bower_concat: {
            all: {
                dest: '.tmp/vendor.js',
                cssDest: '.tmp/vendor.css',

                bowerOptions: {
                    relative: false
                }
            }
        },
        concat: {
            all: {
                src: ['javascript/**/*.js'],
                dest: '.tmp/ettisberger.js'
            }
        },
        postcss: {
            options: {
                map: false,
                processors: [
                    require('autoprefixer')({browsers: 'last 2 versions'})
                ]
            },
            all: {
                src: '.tmp/style.css'
            }
        },
        uglify: {
            dist: {
                options: {
                    compress: true,
                    compress: {
                        warnings: false
                    },
                    mangle: true
                },
                files: {
                    '.tmp/vendor.js': ['.tmp/vendor.js'],
                    '.tmp/ettisberger.js': ['.tmp/ettisberger.js']
                }
            }
        },
        cssmin: {
            dist: {
                files: [{
                    expand: true,
                    cwd: '.tmp/',
                    src: ['*.css'],
                    dest: '.tmp/'
                }]
            }
        },
        copy: {
            all: {
                files: [
                    {expand: true, flatten: true, src: ['.tmp/**'], dest: '../', filter: 'isFile'},
                ]
            }
        },
        clean: {
            all: ['.sass-cache', '.tmp']
        },
        watch: {
            options: {
                livereload: true
            },
            php: {
                files: ['../**/*.php']
            },
            scss: {
                files: ['scss/**/*.scss'],
                tasks: ['sass:all', 'postcss:all', 'copy:all']
            },
            js: {
                files: ['javascript/**/*.js'],
                tasks: ['concat:all', 'copy:all']
            }
        }
    });

    grunt.loadNpmTasks('grunt-bower-concat');
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['sass:all', 'bower_concat:all', 'postcss:all', 'concat:all', 'copy:all', 'clean:all']);
    grunt.registerTask('dist', ['sass:all', 'bower_concat:all', 'postcss:all', 'concat:all', 'uglify:dist', 'cssmin:dist', 'copy:all', 'clean:all']);
};