from django.urls import include, path

from src.apps.solar_system_api.views import ChatGPT, SolarSystemApiView


urlpatterns = [
    path("<str:name>/", SolarSystemApiView.as_view(), name="solar_system"),
    path("chat-gpt/<str:promt>/", ChatGPT.as_view(), name="chat gpt"),
]
