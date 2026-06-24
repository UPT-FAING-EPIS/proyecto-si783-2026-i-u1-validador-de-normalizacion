import os
from dotenv import load_dotenv
load_dotenv(override=True)

from controllers.dashboard_global_controller import get_global_metrics
from controllers.dashboard_controller import get_dashboard_metrics

print("Global metrics:", get_global_metrics())
