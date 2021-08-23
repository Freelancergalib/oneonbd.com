from django.urls import path
from . import views as v

app_name = "register"

urlpatterns = [
    path("", v.backend, name="backend")
  ]