from django.urls import include, path

from src.apps.solar_system_api import urls as solar_system_api
from ..auth import urls as auth_urls
from .docs import urls as docs_url

urlpatterns = [
    path("authentication/", include(auth_urls), name="authentication"),
    path(
        "docs/",
        include(docs_url),
        name="docs",
    ),
    path("solar-system/", include(solar_system_api), name="solar_system"),
]
