module.exports = function(grunt) {
	grunt.initConfig({
  	imagemin: {
    	png: {
      		options: {
        		optimizationLevel: 7
      		},
      		files: [
        	{
        	 	// Set to true to enable the following options…
          		expand: true,
          		// cwd is 'current working directory'
          		cwd: 'C:/xampp/htdocs/projects/IEEECS-Website/img/',
          		src: ['**/*.png'],
          		// Could also match cwd line above. i.e. project-directory/img/
          		dest: 'C:/xampp/htdocs/projects/IEEECS-Website/dist/img/',
          		ext: '.png'
        	}
     	]
    	}
	},
  	concat: {
    	js: {
      		src: ['scripts/**/*.js'],
      		dest: 'dist/built.js'
    	},
    	css: {
    		src: ['styles/**/*.css'],
    		dest: 'dist/style.css'
    	}
  	},
  	cssmin: {
  		target: {
    		files: {
      			'main.css': ['dist/**/*.css']
    		}
  		}
	},
  	htmlmin: {                                     // Task 
    	dist: {                                      // Target 
      		options: {                                 // Target options 
        	removeComments: true,
        	collapseWhitespace: true
      		},
      		files: {                                   // Dictionary of files 
        	'dist/index.html': 'index.html',     // 'destination': 'source' 
      		}
    	},
 	}
});
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-htmlmin');
}