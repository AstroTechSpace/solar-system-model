from django.contrib import admin
from django.urls import include, path

from django.conf.urls.static import static
from django.conf import settings

from src.apps.api import urls as api_urls

urlpatterns = [
    path("admin/", admin.site.urls),
    path("api/v1/", include(api_urls), name="api"),
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
