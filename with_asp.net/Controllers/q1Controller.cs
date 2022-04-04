using IANM_web.Models;
using Microsoft.AspNetCore.Mvc;
using System.Diagnostics;

namespace IANM_web.Controllers
{
    public class q1Controller : Controller
    {
        private readonly ILogger<q1Controller> _logger;

        public q1Controller(ILogger<q1Controller> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        public IActionResult Profil()
        {
            return View();
        }

        public IActionResult Perusahaan()
        {
            return View();
        }

        public IActionResult Layanan()
        {
            return View();
        }

        public IActionResult Team()
        {
            return View();
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
