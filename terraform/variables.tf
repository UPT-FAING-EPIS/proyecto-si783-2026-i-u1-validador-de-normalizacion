variable "resource_group_name" {
  type    = string
  default = "rg-dataquest-prod"
}

variable "location" {
  type    = string
  default = "East US"
}

variable "app_service_plan_name" {
  type    = string
  default = "asp-dataquest-linux"
}

variable "web_app_name" {
  type    = string
  default = "app-dataquest-web"
}

variable "docker_image" {
  type        = string
  description = "La imagen de Docker a desplegar (eg. ghcr.io/usuario/dataquest:latest)"
}
