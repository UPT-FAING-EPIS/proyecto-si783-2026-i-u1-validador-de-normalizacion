terraform {
  required_providers {
    azurerm = {
      source  = "hashicorp/azurerm"
      version = "~> 3.0"
    }
  }
  backend "azurerm" {
    # Backend for storing Terraform state in Azure Storage Account (configured in CI/CD)
  }
}

provider "azurerm" {
  features {}
}
