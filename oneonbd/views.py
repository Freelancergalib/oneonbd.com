from django.shortcuts import render
from backend.models import *

def index(request):
  notice = Notice.objects.all()
  video = Video.objects.all()
  context = {
    'notices' : notice,
    'videos' : video
  }
  return render(request,'index.html',context)
  
def construction(request):
  return render(request,'under-construction.html')