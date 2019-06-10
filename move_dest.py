import os
import shutil

def move(source):
	files = os.listdir(source)
	for f in files:
		try:
			os.rename(source+f, "D:/MINI/src/"+f)
		except:
			os.unlink(source+f)

source = 'D:/MINI/dest/'
move(source)

source = 'C:/xampp/htdocs/proj_imgs/0/'
move(source)