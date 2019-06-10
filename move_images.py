#!C:/Users/saketh/Anaconda3/envs/myenv/python.exe

import shutil
import os
from PIL import Image


print("")

dest1 ='C:/xampp/htdocs/proj_imgs/0/'
source = 'D:/MINI/dest/'

files = os.listdir(source)

def crop(image_path, coords, saved_location):
    image_obj = Image.open(image_path)
    cropped_image = image_obj.crop(coords)
    cropped_image.save(saved_location)
   
for f in files:
	try:
		f1 = Image.open(source+f)
		width, height = f1.size
		if width<height:
			crop(source+f,(0,0,width,width),dest1+f)
		else:
			crop(source+f,(0,0,height,height),dest1+f)
	except:
		pass