from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
def backend(request):
  if request.is_ajax():
    return HttpResponse("working")
  else:
    return HttpResponse("access denied!")